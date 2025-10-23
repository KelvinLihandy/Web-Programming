<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portofolio>
 */
class PortofolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $titles = [
            'Website e-commerce',
            'Mobile app development',
            'AI text classification',
            'Extended reality proejct',
            'Machine learning pipeline',
        ];
        $descriptions = [
            'Sistem e-commerce dengan fitur pembayaran terintegrasi',
            'Aplikasi mobile native dengan performa optimal',
            'Model klasifikasi text dengan SOTA',
            'Pengalaman immersive VR/AR untuk edukasi',
            'Pipeline otomastis untuk training model ML',
        ];

        return [
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(),
            'title' => $this->faker->unique()->randomElement($titles),
            'description' => $this->faker->unique()->randomElement($descriptions),
            'image' => 'img/Padelfy%20(1).png',
        ];
    }
}
