<?php

namespace App\Helpers;

use App\Events\VideoCreated;
use App\Models\User;
use App\Models\Video;
use Carbon\Carbon;

class DefaultVideoHelper
{
    public static function createDefaultVideo(array $overrides = [])
    {
        $defaultUserId = User::first()->id ?? User::factory()->create()->id;

        $defaultData = [
            'title' => '¡Mi nueva CASA en Andorra! 😍',
            'description' => 'Tour complet de la nova casa de Willyrex a Andorra.',
            'url' => 'https://www.youtube.com/embed/F-qkQ6LiNcY?si=k6gL6-c0kUMG8v_D',
            'published_at' => Carbon::now()->toDateTimeString(),
            'previous' => null,
            'next' => null,
            'series_id' => 1,
            'user_id' => $defaultUserId,
        ];

        $data = array_merge($defaultData, $overrides);

        $video = Video::create($data);

        event(new VideoCreated($video));

        return $video;
    }

    public static function createDefaultVideo2(array $overrides = [])
    {
        $defaultUserId = User::first()->id ?? User::factory()->create()->id;

        $defaultData = [
            'title' => '¡REACCIONO al NUEVO GTA VI!',
            'description' => 'Willyrex reacciona al tràiler del nou Grand Theft Auto VI.',
            'url' => 'https://www.youtube.com/embed/QdBZY2fkU-0',
            'published_at' => Carbon::now()->toDateTimeString(),
            'previous' => null,
            'next' => null,
            'series_id' => 1,
            'user_id' => $defaultUserId,
        ];

        $data = array_merge($defaultData, $overrides);

        return Video::create($data);
    }

    public static function createDefaultVideo3(array $overrides = [])
    {
        $defaultUserId = User::first()->id ?? User::factory()->create()->id;

        $defaultData = [
            'title' => 'MI NUEVO SETUP GAMING 2025',
            'description' => 'Descobreix com és l’estudi on grava Willyrex els seus vídeos.',
            'url' => 'https://www.youtube.com/embed/rMbKFvTpxTs?si=2OKJxxwpvwOJec_Q',
            'published_at' => Carbon::now()->toDateTimeString(),
            'previous' => null,
            'next' => null,
            'series_id' => 1,
            'user_id' => $defaultUserId,
        ];

        $data = array_merge($defaultData, $overrides);

        return Video::create($data);
    }
}
