<?php

namespace Database\Factories;

use App\Models\Headquarters;
use Illuminate\Database\Eloquent\Factories\Factory;

class ObituariesFactory extends Factory
{

    public function definition()
    {
        return [
            'name_deceased' => $this->faker->name(),
            'family' => $this->faker->name(),
            'date_death' => $this->faker->date(),
            'wake' => $this->faker->randomElement(['sede central cartago','sede bolivar zarzal']),
            'church' => $this->faker->randomElement(['Iglesia san cristobal clemente de la resurrecion','Capilla Divino Niño Jesus']),
            'hour' => $this->faker->randomElement(['10:30 AM','7:00 PM']),
            'cemetery' => $this->faker->randomElement(['Cementerio zarzal','Cementerio de cartago Valle del Cauca']),
            'municipality_id' => 2,
        ];
    }
}
