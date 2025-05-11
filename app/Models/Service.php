<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDService';

    protected $fillable = ['IDInstitution', 'nama_layanan', 'deskripsi', 'persyaratan', 'alur'];

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'IDInstitution');
    }
}
