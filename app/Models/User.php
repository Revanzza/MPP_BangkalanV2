<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'IDUser'; // ganti jika kamu pakai IDUser sebagai PK

    protected $fillable = [
        'username',
        'password',
        'name',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // RELASI
    public function institution()
    {
        return $this->hasOne(Institution::class, 'IDUser');
    }

    public function information()
    {
        return $this->hasMany(Information::class, 'IDUser');
    }

    public function agenda()
    {
        return $this->hasMany(Agenda::class, 'IDUser');
    }

    public function downloads()
    {
        return $this->hasMany(Download::class, 'IDUser');
    }

    public function isMpp()
    {
        return $this->role === 'mpp';
    }

    public function isInstansi()
    {
        return $this->role === 'instansi';
    }
}
