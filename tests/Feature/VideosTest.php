<?php

namespace Tests\Feature;

use App\Models\Video;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VideosTest extends TestCase
{
    use RefreshDatabase;

    public function test_users_can_view_videos(): void
    {
        $video = Video::factory()->create();

        $response = $this->get(route('videos.show', $video->id));

        $response->assertStatus(200);
        $response->assertSee($video->title);
    }

    public function test_users_cannot_view_not_existing_videos(): void
    {
        $response = $this->get(route('videos.show', 999));

        $response->assertStatus(404);
    }
}
