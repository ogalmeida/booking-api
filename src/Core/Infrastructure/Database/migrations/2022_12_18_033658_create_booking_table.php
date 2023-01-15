<?php

namespace Booking\Core\Infrastructure\Database\migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->dateTime('booked_at');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->enum('status', ['CREATED', 'CANCELED', 'PAID', 'FINISHED']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
};
