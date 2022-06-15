<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarrouselImageFactory extends Factory
{

    public function definition()
    {
        $fileName = $this->faker->numberBetween(1, 10) . '.jpg';
        return [
            'name' => "{$fileName}",
            'path' => "img/carrousel/{$fileName}"
        ];
    }
}
