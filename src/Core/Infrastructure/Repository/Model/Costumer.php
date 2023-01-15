<?php

namespace Booking\Core\Infrastructure\Repository\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'surname',
        'email',
    ];
}
