<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl($width = 800, $height = 600),
            'title' => $this->faker->sentence,
            'slug' => Str::slug($this->faker->sentence),
            'description' => $this->faker->paragraph(6),
            'category_id' => 1,
            'user_id' => 1,
            'featured' => 0,
            'published_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
