<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            'Web Development',
            'Mobile App',
            'UI/UX Design',
            'Data Science',
            'Game Development'
        ];
        $name = $this->faker->unique()->randomElement($categories);
        
        return [
            'name' => $name,
            'slug' => Str::slug($name)
        ];
    }
}
