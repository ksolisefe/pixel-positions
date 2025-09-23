<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

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

        Job::factory(20)->hasAttached($tags)->create(new Sequence([
            'featured' => false,
            'schedule' => 'Full Time',
        ], [
            'featured' => true,
            'schedule' => 'Part Time',
        ], [
            'featured' => false,
            'schedule' => 'Contract',
        ], [
            'featured' => true,
            'schedule' => 'Internship',
        ], [
            'featured' => false,
            'schedule' => 'Freelance',
        ], [
            'featured' => true,
            'schedule' => 'Remote',
        ], [
            'featured' => false,
            'schedule' => 'Hybrid',
        ]));

    }
}
