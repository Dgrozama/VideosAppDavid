<?php

namespace App\Helpers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserHelper
{
    public static function createDefaultUsers()
    {
        $defaultUserConfig = config('users.default_user');
        $professorConfig = config('users.professor');
        $defaultTeamConfig = config('teams.default_team');
        $professorTeamConfig = config('teams.professor_team');

        $defaultUser = User::create([
            'id' => $defaultUserConfig['id'],
            'name' => $defaultUserConfig['name'],
            'email' => $defaultUserConfig['email'],
            'password' => Hash::make($defaultUserConfig['password']),
        ]);

        $professor = User::create([
            'id' => $professorConfig['id'],
            'name' => $professorConfig['name'],
            'email' => $professorConfig['email'],
            'password' => Hash::make($professorConfig['password']),
        ]);

        $defaultTeam = Team::create([
            'id' => $defaultTeamConfig['id'],
            'name' => $defaultTeamConfig['name'],
            'user_id' => $defaultUser->id,
            'personal_team' => $defaultTeamConfig['personal_team'],
        ]);

        $professorTeam = Team::create([
            'id' => $professorTeamConfig['id'],
            'name' => $professorTeamConfig['name'],
            'user_id' => $professor->id,
            'personal_team' => $professorTeamConfig['personal_team'],
        ]);

        $defaultUser->update(['current_team_id' => $defaultTeam->id]);
        $professor->update(['current_team_id' => $professorTeam->id]);

        return [
            'user' => $defaultUser,
            'professor' => $professor,
            'default_team' => $defaultTeam,
            'professor_team' => $professorTeam,
        ];
    }
}
