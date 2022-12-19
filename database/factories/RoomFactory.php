<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $roomLevel = fake()->numberBetween(1, 5);
        $roomNumber = fake()->numberBetween(1, 9);

        return [
            'name' => sprintf('Room %d', $roomNumber),
            'level' => $roomLevel,
            'is_avaliable' => fake()->boolean(75),
            'price' => fake()->randomFloat(2, 100, 300),
        ];
    }
}
