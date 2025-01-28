<?php

namespace Database\Seeders;

use App\Helpers\UserHelper;
use App\Helpers\VideoHelper;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        UserHelper::createDefaultUsers();
        VideoHelper::createDefaultVideos();
    }
}
