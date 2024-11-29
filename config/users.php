<?php

return [
    'default_user' => [
        'id' => env('DEFAULT_USER_ID', 1),
        'name' => env('DEFAULT_USER_NAME', 'Default User'),
        'email' => env('DEFAULT_USER_EMAIL', 'default@example.com'),
        'password' => env('DEFAULT_USER_PASSWORD', 'password123'),
        'current_team' => env('DEFAULT_USER_CURRENT_TEAM', 1),
    ],
    'professor' => [
        'id' => env('PROFESSOR_ID', 2),
        'name' => env('DEFAULT_PROFESSOR_NAME', 'Professor'),
        'email' => env('PROFESSOR_EMAIL', 'professor@example.com'),
        'password' => env('PROFESSOR_PASSWORD', 'password123'),
        'current_team' => env('DEFAULT_PROFESSOR_CURRENT_TEAM', 2),
    ],
];
