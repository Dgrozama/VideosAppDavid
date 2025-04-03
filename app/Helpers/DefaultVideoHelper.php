<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\Video;
use Carbon\Carbon;


class DefaultVideoHelper
{
    public static function createDefaultVideo(array $overrides = []){

        $defaultUserId = User::first()->id ?? User::factory()->create()->id;


        $defaultData = [
            'title' => 'Schedule 1 – 20 HUGE Tips That Will Help You',
            'description' => 'Primer video per defecte',
            'url' => 'https://www.youtube.com/embed/O80x53XlfwE?si=zARpFU3U9KLe_PBi',
            'published_at' => Carbon::now()->toDateTimeString(),
            'previous' => null,
            'next' => null,
            'series_id' => 1,
            'user_id' => $defaultUserId
        ];

        $data = array_merge($defaultData, $overrides);

        return Video::create($data);
    }
    public static function createDefaultVideo2(array $overrides = []){

        $defaultUserId = User::first()->id ?? User::factory()->create()->id;


        $defaultData = [
            'title' => 'Five Nights at Freddy\'s 2 | Official Teaser',
            'description' => 'Segon video per defecte',
            'url' => 'https://www.youtube.com/embed/eGV7zwjvxKs?si=yGObLF5A9DOhqJnp',
            'published_at' => Carbon::now()->toDateTimeString(),
            'previous' => null,
            'next' => null,
            'series_id' => 1,
            'user_id' => $defaultUserId
        ];

        $data = array_merge($defaultData, $overrides);

        return Video::create($data);
    }
    public static function createDefaultVideo3(array $overrides = []){

        $defaultUserId = User::first()->id ?? User::factory()->create()->id;


        $defaultData = [
            'title' => 'KING OF THE STREETS: KOPFKINO ── "ORSU CORSU"',
            'description' => 'Tercer video per defecte',
            'url' => 'https://www.youtube.com/embed/Tb_cgKo8-LI?si=FO5YI8YUKrj-UFvJ',
            'published_at' => Carbon::now()->toDateTimeString(),
            'previous' => null,
            'next' => null,
            'series_id' => 1,
            'user_id' => $defaultUserId
        ];

        $data = array_merge($defaultData, $overrides);

        return Video::create($data);
    }

}
