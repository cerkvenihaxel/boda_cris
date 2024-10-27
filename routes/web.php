<?php

use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SpotifyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/playlist', function(){
    return view('playlist');
});

Route::get('/colaborar', function () {
    return view('colaborar');
})->name('colaborar');

Route::get('/confirmar-asistencia', function (){
   return view('confirmation');
})->name('confirmar-asistencia');

Route::post('/add-invitation', [ConfirmationController::class, 'store'])->name('add-invitation');

Route::get('/spotify/search-song', [SpotifyController::class, 'searchSong']);
Route::post('/spotify/add-to-playlist', [SpotifyController::class, 'addToPlaylist']);
