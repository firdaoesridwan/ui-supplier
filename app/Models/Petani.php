<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'luas_lahan',
        'varietas_sawit',
        'pupuk',
        'tahun_sawit'
    ];

    public $timestamps = true;
}
