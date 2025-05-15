<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mekanisme extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_service',
        'deskripsi_mekanisme',
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
