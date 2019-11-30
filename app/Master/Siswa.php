<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nisn',
        'nis',
        'nama',
        'jk',
        'is_active'
    ];
}
