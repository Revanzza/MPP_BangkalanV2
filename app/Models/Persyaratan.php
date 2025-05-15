<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Persyaratan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_service',
        'deskripsi_persyaratan',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }

    protected static function boot()
    {
        parent::boot();

    }
}
