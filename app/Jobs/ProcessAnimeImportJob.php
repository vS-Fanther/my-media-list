<?php

namespace App\Jobs;

use App\Domains\Anime\Models\Anime;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use SplFileObject;

class ProcessAnimeImportJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected string $filePath;
    /**
     * Create a new job instance.
     */
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $file = new SplFileObject($this->filePath, 'r');

        $chunkSize = 1000;

        $data = [];

        while (!$file->eof()) {
            for ($i = 0; $i < $chunkSize && !$file->eof(); ++$i) {
                $line = $file->fgets();
                if ($line) {
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
                } else {
                    break;
                }
            }

            if (!empty($data)) {
                Anime::query()->insert($data);
                $data = [];
            }
        }
    }
}
