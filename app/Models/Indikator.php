<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;

    protected $table = 'indikators';             // memanggil nama table

    protected $primaryKey = 'id';    // primary key ny
    protected $keyType = 'string';              // merubah type data agar terpanggil
    protected $fillable = [                     // nama kolom yang dapat di edit
        'id',
        'no',
        'name',
        'bobot',
        'bobot_aspek',
        'aspek',
        'domain',
    ];
    
    public function penjelasan() {
        return $this->hasMany(Penjelasan::class, 'id_indikator', 'id');
    }

    // public function aspek() {
    //     return $this->hasMany(Aspek::class);
    // }
}
