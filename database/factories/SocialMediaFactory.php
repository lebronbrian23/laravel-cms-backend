<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocialMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->username,
            'url' => $this->faker->url,
            'type' => 'Twitter',
            'user_id' => User::all()->random(),
        ];
    }
}
