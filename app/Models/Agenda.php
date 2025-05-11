<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDAgenda';

    protected $fillable = ['nama_agenda', 'deskripsi', 'waktu', 'tempat', 'IDUser'];

    public function user()
    {
        return $this->belongsTo(User::class, 'IDUser');
    }
}
