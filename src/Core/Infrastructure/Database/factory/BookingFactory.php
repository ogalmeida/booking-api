<?php

namespace Booking\Core\Infrastructure\Database\factory;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    public function definition()
    {
        return [
            'booked_at' => fake()->dateTimeBetween('-1 week'),
            'start_at' => fake()->dateTimeBetween('+1 day', '+1 week'),
            'end_at' => fake()->dateTimeBetween('+1 week', '+2 weeks'),
            'status' => fake()->randomElement(['CREATED', 'CANCELED', 'PAID', 'FINISHED']),
        ];
    }
}
