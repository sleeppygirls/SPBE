<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspek extends Model
{
    use HasFactory;

    protected $table = 'aspeks';             // memanggil nama table

    protected $primaryKey = 'id';    // primary key ny
    protected $keyType = 'integer';              // merubah type data agar terpanggil
    protected $fillable = [                     // nama kolom yang dapat di edit
        'id',
        'aspek',
    ];

    // public function aspek() {
    //     return $this->hasMany(Indikator::class);
    // }
}
