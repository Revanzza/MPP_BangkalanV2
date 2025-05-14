<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;


class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'name',
    ];

    protected $hidden = [
        'password',
    ];

    public function informations()
    {
        return $this->hasMany(Information::class, 'id_user');
    }

    public function agendas()
    {
        return $this->hasMany(Agenda::class, 'id_user');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
