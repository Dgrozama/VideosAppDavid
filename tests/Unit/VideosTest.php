<?php

namespace Tests\Unit;

use App\Models\Video;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;

class VideosTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_formatted_published_at_date(): void
    {
        Carbon::setLocale('ca');
        $video = Video::factory()->create(['published_at' => Carbon::create(2025, 1, 13)]);

        $this->assertEquals('13 de gener de 2025', $video->formatted_published_at);
    }

    public function test_can_get_formatted_published_at_date_when_not_published(): void
    {
        $video = Video::factory()->create(['published_at' => null]);

        $this->assertNull($video->formatted_published_at);
    }
}
