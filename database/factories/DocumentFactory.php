<?php

namespace Database\Factories;

use App\Models\Costumer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document>
 */
class DocumentFactory extends Factory
{
    public function definition()
    {
        return [
            'number' => fake()->randomNumber(),
            'type' => fake()->randomElement(['ID', 'DRIVE_LICENSE', 'PASSPORT']),
            'costumer_id' => Costumer::factory(),
        ];
    }
}
