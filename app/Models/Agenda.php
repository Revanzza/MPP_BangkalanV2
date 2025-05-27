<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_agenda',
        'deskripsi',
        'waktu_pelaksanaan',
        'tempat',
        'foto_agenda',
        'id_user',
        'slug', // tambahkan slug di sini juga
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id_user = auth()->id(); // otomatis set user yang login
            $model->slug = \Str::slug($model->nama_agenda) . '-' . uniqid(); // buat slug dari nama_agenda
        });
    }

    // Opsional, supaya bisa pakai route model binding via slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
