<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OperationalHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'open_time',
        'close_time',
        'is_closed',
    ];

    protected $casts = [
        'is_closed' => 'boolean',

    ];
}
