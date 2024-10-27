<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'song' => 'required|string|max:255',
        ]);

        Song::create([
            'song' => $request->song,
        ]);

        return redirect()->back()->with('success', '¡Canción agregada a la playlist!');
    }
}
