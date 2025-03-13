<?php

namespace App\Helpers;

use App\Models\Video;
use Carbon\Carbon;


class DefaultVideoHelper {
    public static function createDefaultVideo(array $overrides = []){
        $defaultData = [
            'title' => 'PARTICIPARE EN LA VELADA DEL AÑO 5 / MI PRIMER ENTRENAMIENTO / REPRESENTANDO A MÉXICO',
            'description' => 'Primer video per defecte',
            'url' => 'https://www.youtube.com/embed/R3nXNgSLnYA?si=vjpZrFniafW9qnPp',
            'published_at' => Carbon::now()->toDateTimeString(),
            'previous' => null,
            'next' => null,
            'series_id' => 1
        ];
        $data = array_merge($defaultData, $overrides);

        return Video::create($data);
    }
    public static function createDefaultVideo2(array $overrides = []){
        $defaultData = [
            'title' => 'Franco Tenaglia "King of the Street" VS Edye Ruiz "The Shadow" | Bare Knuckle war | DWT',
            'description' => 'Segon video per defecte',
            'url' => 'https://www.youtube.com/embed/XUbENj1d2s8?si=uPPBNE6tgtrUu58T',
            'published_at' => Carbon::now()->toDateTimeString(),
            'previous' => null,
            'next' => null,
            'series_id' => 1
        ];
        $data = array_merge($defaultData, $overrides);

        return Video::create($data);
    }
    public static function createDefaultVideo3(array $overrides = []){
        $defaultData = [
            'title' => 'Fuimos a la Fiesta de Ladyboys de Tailandia (lo intentamos xd)',
            'description' => 'Tercer video per defecte',
            'url' => 'https://www.youtube.com/embed/X-y1jemKsiY?si=0KsKN4wf-O_Kia3G',
            'published_at' => Carbon::now()->toDateTimeString(),
            'previous' => null,
            'next' => null,
            'series_id' => 1
        ];
        $data = array_merge($defaultData, $overrides);

        return Video::create($data);
    }
}
