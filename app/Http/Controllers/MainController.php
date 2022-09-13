<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function albums() {
        $reviews = new Album();

        return view('albums', ['albums' => $reviews->all()]);
    }

    public function add() {
        $albums = new Album();
        //dd($reviews->all());
        return view('add', ['albums' => $albums->all()]);
    }

    public function add_check(Request $request) {
        //dd($request);
        $valid = $request->validate([
            'artist' => 'required|min:4|max:100',
            'album' => 'required|min:4|max:100',
            'description' => 'required|min:15|max:500',
            'url' => 'required|min:4|max:500'
        ]);

        $album = new Album();
        $album->artist = $request->input('artist');
        $album->album = $request->input('album');
        $album->description = $request->input('description');
        $album->url = $request->input('url');

        $album->save();

        return redirect('add');
    }
    
}
