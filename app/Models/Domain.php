<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;
    protected $table = 'domains';             // memanggil nama table

    protected $primaryKey = 'id';    // primary key ny
    protected $keyType = 'integer';              // merubah type data agar terpanggil
    protected $fillable = [                     // nama kolom yang dapat di edit
        'id',
        'domain',
    ];

    // public function aspek() {
    //     return $this->hasMany(Indikator::class);
    // }
}
