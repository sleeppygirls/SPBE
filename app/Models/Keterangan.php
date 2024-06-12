<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    use HasFactory;
    protected $table = 'keterangans';             // memanggil nama table

    protected $primaryKey = 'id';               // primary key ny
    protected $keyType = 'string';              // merubah type data agar terpanggil
    protected $fillable = [                     // nama kolom yang dapat di edit
        'id',
        'name',
    ];

    public function indikator()
    {
        return $this->hasOne(Indikator::class, 'id_keterangan');
    }
}
