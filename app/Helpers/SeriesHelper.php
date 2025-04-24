<?php

namespace App\Helpers;

use App\Models\Serie;
use Carbon\Carbon;

class SeriesHelper
{
    public static function createDefaultSerie1()
    {
        return Serie::create([
            'title' => 'Breaking Bad',
            'description' => 'A high school chemistry teacher turned methamphetamine producer.',
            'image' => null,
            'user_name' => 'Admin',
            'user_photo_url' => null,
            'published_at' => Carbon::now()->subDays(rand(0, 10)),
        ]);
    }
    public static function createDefaultSerie2()
    {
        return Serie::create([
            'title' => 'Game of Thrones',
            'description' => 'Nine noble families fight for control over the lands of Westeros.',
            'image' => null,
            'user_name' => 'Admin',
            'user_photo_url' => null,
            'published_at' => Carbon::now()->subDays(rand(0, 10)),
        ]);
    }
    public static function createDefaultSerie3()
    {
        return Serie::create([
            'title' => 'Stranger Things',
            'description' => 'A group of kids uncover supernatural mysteries in their small town.',
            'image' => null,
            'user_name' => 'Admin',
            'user_photo_url' => null,
            'published_at' => Carbon::now()->subDays(rand(0, 10)),
        ]);
    }
}
