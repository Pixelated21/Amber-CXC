<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_nm' => $this->faker->firstName,
            'last_nm' => $this->faker->lastName,
            'email_addr' => $this->faker->unique()->safeEmail(),
            'dob' => $this->faker->date,
            'class' => $this->faker->randomLetter,
            'gender' => 'Female',
            'phone_nbr' => $this->faker->unique()->phoneNumber,
        ];
    }
}
