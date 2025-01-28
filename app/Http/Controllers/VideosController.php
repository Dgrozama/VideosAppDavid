<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VideosController extends Controller
{
    public function show(int $id): View
    {
        $video = Video::findOrFail($id);
        return view('videos.show', compact('video'));
    }

    public function testedBy(): void
    {
        // Implement the logic for testedBy
    }
}
