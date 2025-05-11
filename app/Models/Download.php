<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Downloads extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDDownload';

    protected $fillable = ['judul', 'file_path', 'keterangan', 'IDUser'];

    public function user()
    {
        return $this->belongsTo(User::class, 'IDUser');
    }
}
