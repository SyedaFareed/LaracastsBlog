<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
        return [    //making a factory for creating new posts
                'user_id'=> User::factory(),    // we are sending user_id to make sure all posts have the same author
                'category_id'=> Category::factory(),
                'slug'=> $this->faker->slug,    
                'title'=> $this->faker->sentence,
                'excerpt'=> $this->faker->sentence,
                'body'=>$this->faker->paragraph
        ];
    }
}
