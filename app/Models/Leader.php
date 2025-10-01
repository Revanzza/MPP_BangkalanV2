<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'photo',
        'biography',
        'email',
        'phone',
        'is_head',
        'is_active',
        'order',
    ];

    protected $casts = [
        'is_head' => 'boolean',
        'is_active' => 'boolean',
    ];
}
