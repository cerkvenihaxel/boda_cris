<?php

namespace App\Facades;

use Aerni\Spotify\Spotify as SpotifyInstance;
use Illuminate\Support\Facades\Facade;

class SpotifyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'spotify';
    }
}
