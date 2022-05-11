<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use App\Models\Friends;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = \App\Models\Groups::OrderBy('id', 'desc')->paginate(3);

        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:groups|max:255',
            'description' => 'required',
        ]);
 
        $groups = new \App\Models\groups;
 
        $groups->name = $request->name;
        $groups->description = $request->description;
 
        $groups->save();
        return redirect ('/groups');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $groups = \App\Models\Groups::where('id', $id)->first();
        return view('groups.show', ['group' => $groups]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groups = \App\Models\Groups::where('id', $id)->first();
        return view('groups.edit', ['group' => $groups]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        \App\Models\groups::find($id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/groups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Models\Groups::find($id)->delete();
        return redirect('/groups');
    }

    public function addmember($id)
    {
        $friend = \App\Models\Friends::where('groups_id', '=', 0)->get();
        $groups = \App\Models\Groups::where('id', $id)->first();
        return view('groups.addmember', ['group' => $groups, 'friend' => $friend]);
    }

    public function updateaddmember(Request $request, $id)
    {
        $friend = \App\Models\Friends::where('id', $request->friend_id)->first();
        \App\Models\Friends::find($friend->id)->update([
            'groups_id' => $id
        ]);

        return redirect('/groups/addmember/' . $id);
    }

    public function deleteaddmember(Request $request, $id)
    {
        \App\Models\Friends::find($id)->update([
            'groups_id' => 0
        ]);

        return redirect('/groups');
    }
}
