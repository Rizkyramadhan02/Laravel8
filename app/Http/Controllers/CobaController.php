<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {

        $friends = \App\Models\Friends::OrderBy('id', 'desc')->paginate(3);

        return view('friends.index', compact('friends'));
    }
    public function create()
    {
        
        return view('friends.create');
    }
    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_tlp' => 'required|numeric',
            'alamat' => 'required',
        ]);
 
        $friends = new \App\Models\Friends;
 
        $friends->nama = $request->nama;
        $friends->no_tlp = $request->no_tlp;
        $friends->alamat = $request->alamat;
        $friends->groups_id = 0;
 
        $friends->save();
        return redirect ('/');
    }
    public function show($id)
    {
        $friends = \App\Models\Friends::where('id', $id)->first();

        $history = \App\Models\History::with('friends', 'groups')->where('friends_id', $id)->get();
        return view('friends.show', ['friend' => $friends,'history' => $history]);
    }
    public function edit($id)
    {
        $friends = \App\Models\Friends::where('id', $id)->first();
        return view('friends.edit', ['friend' => $friends]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_tlp' => 'required|numeric',
            'alamat' => 'required',
        ]);
        \App\Models\Friends::find($id)->update([
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat,

        ]);

        return redirect('/');
    }
    public function destroy($id)
    {
        \App\Models\Friends::find($id)->delete();
        return redirect('/');
    }
}
