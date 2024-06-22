<?php

namespace App\Domains\Anime\Application\Api\Controllers;

use App\Domains\Anime\Application\Api\Resources\ImportAnimeResource;
use App\Domains\Anime\Jobs\ProcessAnimeImportJob;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImportAnimeController extends Controller
{

    public function importAnime(Request $request): ImportAnimeResource
    {
        $path = Storage::put('Anime_list', $request->file('anime'));
        $fullFilePath = storage_path('app/' . $path);

        ProcessAnimeImportJob::dispatch($fullFilePath);
        return new ImportAnimeResource("Success");
    }
}
