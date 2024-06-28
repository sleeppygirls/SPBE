<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailIndikator extends Model
{
    use HasFactory;

    protected $table = 'detail_indikators';             // memanggil nama table

    protected $primaryKey = 'id';    // primary key ny
    protected $keyType = 'string';              // merubah type data agar terpanggil
    protected $fillable = [                     // nama kolom yang dapat di edit
        'id',
        'username',
        'id_task',
        'id_indikator',
        'capaian',
        'note',
    ];
}
