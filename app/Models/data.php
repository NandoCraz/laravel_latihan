<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'nama_guru',
        'mata_pelajaran'
    ];
}
