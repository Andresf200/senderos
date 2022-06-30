<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HeadquartersFactory extends Factory
{

    public function definition()
    {
        return [
            'municipality' => $this->faker->randomElement(['zarzal']),
        ];
    }
}
