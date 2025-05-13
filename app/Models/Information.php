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
        'isi',
        'foto_information',
        'kategori',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}