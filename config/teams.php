<?php

return [
    'default_team' => [
        'id' => env('DEFAULT_TEAM_ID', 1),
        'name' => env('DEFAULT_TEAM_USER_NAME', "Default"),
        'user_id' => env('DEFAULT_TEAM_USER_ID', 1),
        'personal_team' => env('DEFAULT_TEAM_PERSONAL_TEAM', 1),
    ],
    'professor_team' => [
        'id' => env('PROFESSOR_TEAM_ID', 2),
        'name' => env('PROFESSOR_TEAM_USER_NAME', "Professor"),
        'user_id' => env('PROFESSOR_TEAM_USER_ID', 2),
        'personal_team' => env('PROFESSOR_TEAM_PERSONAL_TEAM', 1),
    ]
];
