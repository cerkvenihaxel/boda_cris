<?php

namespace App\Http\Controllers;

use App\Facades\SpotifyFacade;
use App\Jobs\UpdateTokenCode;
use App\Models\TokenCode;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Aerni\Spotify\Spotify;
use Illuminate\Support\Facades\Log;

class SpotifyController extends Controller
{

    public function searchSong(Request $request)
    {

        $query = $request->query('query');
        $market = 'AR';

        $results = SpotifyFacade::searchTracks($query)
            ->market($market)
            ->limit(10)
            ->get();

        return response()->json($results);
    }

    public function addToPlaylist(Request $request)
    {
        $songUri = $request->input('songUri');
        $playlistId = '1DYcny3fMa89bOX30KnV90'; // ID de tu lista de reproducción

        $tokenCode = TokenCode::latest('created_at')
            ->value('access_token');

        $accessToken = $tokenCode;

        $client = new Client();

        try {
            // Hacer la solicitud POST a la API de Spotify
            $response = $client->post("https://api.spotify.com/v1/playlists/{$playlistId}/tracks", [
                'headers' => [
                    'Authorization' => "Bearer {$accessToken}",
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'uris' => [$songUri],
                    'position' => 0
                ]
            ]);

            return response()->json(['status' => 'success', 'response' => json_decode($response->getBody()->getContents())]);
        } catch (\Exception $e) {
            Log::error('Error adding track to playlist: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Could not add track to playlist'], 500);
        }
    }
}

