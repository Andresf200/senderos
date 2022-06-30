<?php

namespace Database\Factories;

use App\Models\Headquarters;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class UserFactory extends Factory
{

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'identifier'  => $this->faker->randomNumber(9),
            'phone' => $this->faker->randomNumber(9),
            'address' => $this->faker->address() ,
            'municipality_id' => 1,
            'admin' => $this->faker->randomElement([User::USUARIO_ADMINISTRADOR, User::USUARIO_REGULAR]),
            'email' => $this->faker->email(),
            'password' => 'password', // password,
             'remember_token' => Str::random(10),
        ];
    }

}
