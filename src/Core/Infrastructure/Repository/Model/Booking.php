<?php

namespace Booking\Core\Infrastructure\Repository\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'booked_at',
        'start_at',
        'end_at',
        'status',
    ];

    protected $casts = [
        'booked_at' => 'datetime',
        'start_at' => 'datetime',
        'end_at' => 'datetime',
    ];
}
