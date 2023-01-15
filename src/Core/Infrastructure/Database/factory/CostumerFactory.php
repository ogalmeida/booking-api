<?php

namespace Booking\Core\Infrastructure\Database\factory;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Costumer>
 */
class CostumerFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'surname' => fake()->lastName(),
        ];
    }
}
