<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'url' => fake()->url(), // Adding a fake URL generator
            'salary' => fake()->numberBetween(35000, 100000),
            'featured' => fake()->boolean(),
            'location' => fake()->randomElement(['On-Site', 'Hybrid', 'Remote']),
            'schedule' => fake()->randomElement(['Full-Time', 'Part-Time', 'Service']),
        ];
    }
}
