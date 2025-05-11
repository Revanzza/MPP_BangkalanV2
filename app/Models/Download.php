<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Download extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDDownload';

    protected $fillable = ['judul', 'file_path', 'keterangan', 'IDUser'];

    public function user()
    {
        return $this->belongsTo(User::class, 'IDUser');
    }
}
