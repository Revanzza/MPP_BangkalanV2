<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_institution',
        'nama_layanan',
    ];

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'id_institution');
    }

    public function persyaratan()
    {
        return $this->hasMany(Persyaratan::class, 'id_service');
    }

    public function mekanisme()
    {
        return $this->hasMany(Mekanisme::class, 'id_service');
    }
}