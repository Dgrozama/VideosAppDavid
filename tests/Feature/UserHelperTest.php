<?php
namespace Tests\Feature;

use App\Helpers\UserHelper;
use App\Models\Team;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserHelperTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_default_users()
    {
        // Arrange
        $defaultUserConfig = config('users.default_user');
        $professorConfig = config('users.professor');
        $defaultTeamConfig = config('teams.default_team');
        $professorTeamConfig = config('teams.professor_team');

        // Act
        $users = UserHelper::createDefaultUsers();

        // Assert
        $this->assertDatabaseHas('users', [
            'id' => $defaultUserConfig['id'],
            'name' => $defaultUserConfig['name'],
            'email' => $defaultUserConfig['email'],
            'current_team_id' => $defaultTeamConfig['id'],
        ]);

        $this->assertTrue(Hash::check($defaultUserConfig['password'], $users['user']->password));

        $this->assertDatabaseHas('users', [
            'id' => $professorConfig['id'],
            'name' => $professorConfig['name'],
            'email' => $professorConfig['email'],
            'current_team_id' => $professorTeamConfig['id'],
        ]);

        $this->assertTrue(Hash::check($professorConfig['password'], $users['professor']->password));

        $this->assertDatabaseHas('teams', [
            'id' => $defaultTeamConfig['id'],
            'name' => $defaultTeamConfig['name'],
            'user_id' => $defaultUserConfig['id'],
            'personal_team' => $defaultTeamConfig['personal_team'],
        ]);

        $this->assertDatabaseHas('teams', [
            'id' => $professorTeamConfig['id'],
            'name' => $professorTeamConfig['name'],
            'user_id' => $professorConfig['id'],
            'personal_team' => $professorTeamConfig['personal_team'],
        ]);

        $this->assertInstanceOf(User::class, $users['user']);
        $this->assertInstanceOf(User::class, $users['professor']);
        $this->assertInstanceOf(Team::class, $users['default_team']);
        $this->assertInstanceOf(Team::class, $users['professor_team']);
    }
}
