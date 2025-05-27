<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Information extends Model
{
    use HasFactory;

    protected $table = 'information';

    protected $fillable = [
        'id_user',
        'judul',
        'slug',
        'isi',
        'foto_information',
        'kategori',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id_user = auth()->id(); // Auto-set user yang login
            $model->slug = \Str::slug($model->judul) . '-' . uniqid();
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}