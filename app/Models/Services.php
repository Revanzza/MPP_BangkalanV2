<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDService';

    protected $fillable = ['IDInstitution', 'nama_layanan', 'deskripsi', 'persyaratan'];

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'IDInstitution');
    }
}
