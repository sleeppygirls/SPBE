<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjelasan extends Model
{
    use HasFactory;

    protected $table = 'penjelasans';             // memanggil nama table

    protected $primaryKey = 'id';    // primary key ny
    protected $keyType = 'string';              // merubah type data agar terpanggil
    protected $fillable = [                     // nama kolom yang dapat di edit
        'id',
        'text',
        'id_indikator',
    ];
}
