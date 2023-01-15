<?php

namespace Booking\Core\Infrastructure\Repository\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'number',
        'type',
        'costumer_id',
    ];

    protected $casts = [
        'number' => 'integer',
    ];
}
