<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Employer::factory(5)->create();

        User::factory(5)->create();
        
        $tags = Tag::factory(3)->create();

        Job::factory(20)->hasAttached($tags)->create();

    }
}
