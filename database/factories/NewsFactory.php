<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title =  $this->faker->name;
            return [
                'slug' => Str::slug($title),
                'title' => $title,
                'post_theme_id' => rand(1,2),
                'short' => $this->faker->text(),
                'description' => $this->faker->text(),
                'image' => null, 
            ];
        
    }
}
