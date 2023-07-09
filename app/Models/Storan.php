<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storan extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'nasabah_id',
        'kategori_id',
        'tgl_menabung',
        'harga_pergram',
        'jml_tab_pergram',
        'total_tabungan'
    ];
}
