<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'title' => $this->faker()->sentence(),
            'subTitle' => $this->faker()->sentence(),
            'file' => $this->faker()->imageUrl($width= 1912, $height = 1240),
            'dimensions' => $width .'x'. $height,
            'body' => $this->faker()->sentence(),
            'category' => $this->faker()->randomNumber(4)
        ];
    }
}
