<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nasabah_id',
        'petugas_id',
        'lokasi_id',
        'tgl_tab',
        'kredit',
        'debit'
    ];
}
