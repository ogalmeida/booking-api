<?php

namespace Booking\Core\Infrastructure\Database\factory;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
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
