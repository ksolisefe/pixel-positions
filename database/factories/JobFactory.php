<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory()->create(),
            'title' => fake()->jobTitle(),
            'slug' => fake()->slug(),
            'description' => fake()->paragraph(),
            'salary' => fake()->randomElement(['$100,000 USD', '$80,000 USD', '$60,000 USD', '$40,000 USD', '$20,000 USD']),
            'location' => "Remote",
            'schedule' => fake()->randomElement(['Full Time', 'Part Time', 'Contract', 'Internship']),
            'url' => fake()->url(),
            'featured' => false,
        ];
    }
}
