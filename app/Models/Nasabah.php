<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nik',
        'tgl_bergabung',
        'nama_nasabah',
        'no_hp',
        'tempat_lahir',
        'tgl_lahir',
        'alamat'
    ];
}
