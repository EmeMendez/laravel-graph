<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $title = fake()->sentence(),
            'slug'  => Str::slug($title),
            'user_id' => User::get()->random(),
            'created_at' => fake()->dateTimeBetween($startDate = '-60 days', $endDate = '-30 days', $timezone = null),
            'updated_at' => fake()->dateTimeBetween($startDate = '-30 days', $endDate = 'now', $timezone = null),
        ];
    }
}
