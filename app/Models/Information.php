<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Information extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDInformation';

    protected $fillable = ['IDUser', 'judul', 'isi', 'gambar', 'kategori'];

    public function user()
    {
        return $this->belongsTo(User::class, 'IDUser');
    }
}
