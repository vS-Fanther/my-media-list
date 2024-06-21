<?php

namespace App\Domains\Anime\Application\Api\Controllers;

use App\Domains\Anime\Models\Anime;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImportAnimeController extends Controller
{

    //todo Queues
    public function importAnime(Request $request): void
    {
        $fp = $request->file('anime')->store('anime');
        $fullFilePath = storage_path('app/' . $fp);

        $lines = file($fullFilePath);
        $chunks = array_chunk($lines, 500);
        foreach ($chunks as $chunk) {
            $data = [];
            foreach ($chunk as $line) {
                $params = explode(",", $line);
                $data[] = [
                    'name' => $params[0],
                    'description' => $params[1],
                    'genres' => $params[2],
                    'theme' => $params[3],
                    'original_name' => $params[4],
                    'link' => $params[5],
                    'manga_link' => $params[6],
                    'user_id' => $params[7]
                ];
            }
            Anime::query()->insert($data);
        }
    }
}
