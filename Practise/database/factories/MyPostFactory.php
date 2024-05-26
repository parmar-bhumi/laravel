<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MyPost>
 */
class MyPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentences(3,true);
        return [
            'title'=>$title,
            'subtitle'=>fake()->sentences(3,true),
            'body_content'=>fake()->sentences(10,true),
            'user_id'=>rand(1,5),
            'slug'=>Str::slug($title,'-')
        ];
    }
}
