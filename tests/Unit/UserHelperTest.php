<?php

namespace Tests\Unit;

use App\Helpers\UserHelper;
use App\Models\Team;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class UserHelperTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_creates_default_users_and_associates_to_team()
    {
        $team = Team::factory()->create(['name' => 'Default Team']);

        UserHelper::createDefaultUsers();

        $this->assertDatabaseHas('users', ['name' => 'Default User']);
        $this->assertDatabaseHas('users', ['email' => config('users.default_user_email')]);
        $this->assertDatabaseHas('users', ['email' => config('users.professor_email')]);

        $user = User::where('email', config('users.default_user_email'))->first();
        $professor = User::where('email', config('users.professor_email'))->first();

        echo "User team_id: " . $user->team_id . "\n";
        echo "Professor team_id: " . $professor->team_id . "\n";

        $this->assertEquals($team->id, $user->team_id);
        $this->assertEquals($team->id, $professor->team_id);
    }
    public function test_create_default_videos()
    {
        VideoHelper::createDefaultVideos();

        $this->assertDatabaseHas('videos', ['title' => 'Default Video 1']);
        $this->assertDatabaseHas('videos', ['title' => 'Default Video 2']);
    }
}
