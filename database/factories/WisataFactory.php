<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wisata>
 */
class WisataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'          =>  fake()->city(),
            'description'   =>  fake()->streetName(),
            'desc'          =>  fake()->streetAddress(),
            'rate'          =>  5,
            'price'         =>  fake()->randomFloat(2, 0, 100000),
            'address'       =>  fake()->secondaryAddress(),
            'location_id'   =>  1,
            'open_time'     =>  fake()->time($format = 'H:i:s', $max = 'now'),
            'close_time'    =>  fake()->time($format = 'H:i:s', $max = 'now')
        ];
    }
}
