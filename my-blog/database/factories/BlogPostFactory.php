<?php

namespace Database\Factories;
use App\Models\BlogPost;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{

    protected $model = BlogPost::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>$this->faker->sentence,
            'body' =>$this->faker->paragraph(30),
            'user_id' => BlogPost::factory()
        ];
    }
}
