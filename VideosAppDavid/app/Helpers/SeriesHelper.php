<?php

namespace App\Helpers;

use App\Models\Serie;
use Carbon\Carbon;

class SeriesHelper
{
    public static function createDefaultSerie1()
    {
        return Serie::create([
            'title' => 'Planet Earth II',
            'description' => 'A stunning documentary series exploring wildlife across the globe.',
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/5a/Planet_Earth_II.png/220px-Planet_Earth_II.png',
            'user_name' => 'David Attenborough',
            'user_photo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/David_Attenborough_2015.jpg/220px-David_Attenborough_2015.jpg',
            'published_at' => Carbon::now()->subDays(rand(0, 10)),
        ]);
    }

    public static function createDefaultSerie2()
    {
        return Serie::create([
            'title' => 'Stranger Things',
            'description' => 'A thrilling mystery set in the 80s full of supernatural events.',
            'image' => 'https://upload.wikimedia.org/wikipedia/en/f/f7/Stranger_Things_season_4.jpg',
            'user_name' => 'Netflix Originals',
            'user_photo_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/69/Netflix_logo.svg',
            'published_at' => Carbon::now()->subDays(rand(0, 10)),
        ]);
    }

    public static function createDefaultSerie3()
    {
        return Serie::create([
            'title' => 'Explained',
            'description' => 'Short documentary episodes that explain complex topics in simple terms.',
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/d/d7/Explained_title_card.jpg/220px-Explained_title_card.jpg',
            'user_name' => 'Vox Media',
            'user_photo_url' => 'https://upload.wikimedia.org/wikipedia/commons/4/47/Vox_Media_logo.svg',
            'published_at' => Carbon::now()->subDays(rand(0, 10)),
        ]);
    }
}
