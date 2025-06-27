<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_institution',
        'alamat_institution',
        'website_institution',
        'logo_institution',
        'no_institution',
        // tambahkan 'slug' jika ingin mass assignment
        'slug',
    ];

    protected static function booted()
    {
        static::saving(function ($institution) {
            $institution->slug = Str::slug($institution->nama_institution);
        });
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'id_institution');
    }
}