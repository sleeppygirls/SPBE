<?php

namespace App\Models;

use App\Models\Indikator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aspek extends Model
{
    use HasFactory;
    
    protected $table = 'aspeks';             // memanggil nama table

    protected $primaryKey = 'id';    // primary key ny
    protected $keyType = 'integer';              // merubah type data agar terpanggil
    protected $fillable = [                     // nama kolom yang dapat di edit
        'id',
        'aspek',
        'id_domain',
        // 'bobot_a',
        // 'bobot_aspeka',
    ];

    public function indikator() {
        return $this->hasMany(Indikator::class);
    }
}
