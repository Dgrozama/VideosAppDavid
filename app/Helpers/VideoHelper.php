<?php

namespace App\Helpers;

use App\Models\Video;

class VideoHelper
{
    public static function createDefaultVideos(): void
    {
        $videos = [
            [
                'title' => 'Default Video 1',
                'description' => 'Description for default video 1',
                'url' => 'https://www.youtube.com/watch?v=example1',
                'published_at' => now(),
            ],
            [
                'title' => 'Default Video 2',
                'description' => 'Description for default video 2',
                'url' => 'https://www.youtube.com/watch?v=example2',
                'published_at' => now(),
            ],
        ];

        foreach ($videos as $videoData) {
            Video::updateOrCreate(
                ['url' => $videoData['url']],
                $videoData
            );
        }
    }
}
