<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Institution extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDInstitution';

    protected $fillable = [
        'nama_institution', 'alamat_institution', 'website_institution',
        'logo_institution', 'no_institution', 'IDUser'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'IDUser');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'IDInstitution');
    }
}
