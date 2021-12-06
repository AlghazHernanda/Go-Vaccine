<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class DaftarVaksinModel extends Model
{
    use softDeletes;

    protected $table = 'daftar_vaksin';
    protected $fillable = [
        'jenis_vaksin',
        'lokasi',
        'tanggal_vaksin'
    ];

    protected $hidden;
}
