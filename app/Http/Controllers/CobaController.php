<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {

        $friends = \App\Models\Friends::paginate(3);

        return view('index', compact('friends'));
    }
    public function create()
    {
        
        return view('create');
    }
    public function store(Request $request)
    {
        // Validate the request...
 
        $friends = new \App\Models\Friends;
 
        $friends->nama = $request->nama;
        $friends->no_tlp = $request->no_tlp;
        $friends->alamat = $request->alamat;
 
        $friends->save();
        return redirect ('/friends');
    }
}
