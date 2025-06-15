<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlockFactory extends Factory
{
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['header', 'text', 'image', 'gallery']),
            'name' => $this->faker->sentence,
            'default_content' => json_encode(['text' => $this->faker->paragraph]),
            'default_styles' => json_encode(['color' => '#000000', 'font_size' => '16px']),
            'category' => $this->faker->randomElement(['general', 'commerce', 'services']),
        ];
    }
}