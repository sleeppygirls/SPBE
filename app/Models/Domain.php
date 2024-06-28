<?php

namespace App\Models;

use App\Models\Indikator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Domain extends Model
{
    use HasFactory;
    protected $table = 'domains';             // memanggil nama table

    protected $primaryKey = 'id';    // primary key ny
    protected $keyType = 'integer';              // merubah type data agar terpanggil
    protected $fillable = [                     // nama kolom yang dapat di edit
        'id',
        'domain',
        // 'bobot_domain',
    ];

    public function indikator() {
        return $this->hasMany(Indikator::class);
    }

    public function aspek() {
        return $this->hasMany(Aspek::class, 'id_domain', 'id');
    }
}
