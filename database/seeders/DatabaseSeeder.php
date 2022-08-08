<?php

namespace Database\Seeders;

use App\Models\ContentBlock;
use App\Models\SocialMedia;
use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Type::truncate();
        Project::truncate();
        ContentBlock::truncate();
        SocialMedia::truncate();

        User::factory()->count(1)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(4)->create();
        ContentBlock::factory()->count(1)->create();
        SocialMedia::factory()->count(1)->create();

    }
}
