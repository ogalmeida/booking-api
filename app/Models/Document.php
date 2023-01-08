<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'type',
        'costumer_id',
    ];

    protected $casts = [
        'number' => 'integer',
    ];
}
