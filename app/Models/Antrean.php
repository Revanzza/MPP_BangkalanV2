<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrean extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_service',
        'nama',
        'nik',
        'nomer_antrean',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }
}
