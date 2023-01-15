<?php

namespace Booking\Core\Infrastructure\Repository\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'level',
        'is_avaliable',
        'price',
    ];

    protected $casts = [
        'price' => 'double',
        'level' => 'integer',
        'is_avaliable' => 'boolean',
    ];
}
