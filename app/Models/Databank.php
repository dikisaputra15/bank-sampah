<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Databank extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_bank',
        'tgl_bergabung',
        'lat',
        'long',
        'path'
    ];
}
