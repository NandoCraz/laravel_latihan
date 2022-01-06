<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class walkel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_guru',
        'id_angkatan',
        'id_jurusan',
        'id_ruangan',
        'tahun_ajaran'
    ];
}
