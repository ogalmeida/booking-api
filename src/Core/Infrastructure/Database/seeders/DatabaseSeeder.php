<?php

namespace Booking\Core\Infrastructure\Database\seeders;

use App\Models\Costumer;
use App\Models\Document;
use App\Models\Room;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Costumer::factory(10)->create();

        Room::factory(10)->create();

        Document::factory(10)->create();
    }
}
