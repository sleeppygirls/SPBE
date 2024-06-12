<?php

namespace App\Models;

use App\Models\Aspek;
use App\Models\Domain;
use App\Models\Penjelasan;
use App\Models\DetailIndikator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'id_keterangan',
        'aspek',
        'domain',
    ];

    public function penjelasan() {
        return $this->hasMany(Penjelasan::class, 'id_indikator', 'id');
    }

    public function domainR()
    {
        return $this->belongsTo(Domain::class,'domain','id');
    }

    public function aspekR()
    {
        return $this->belongsTo(Aspek::class,'aspek','id');
    }

    public function keterangan()
    {
        return $this->belongsTo(Keterangan::class,'id_keterangan','id');
    }

    public function detailIndikator()
    {
        return $this->hasOne(DetailIndikator::class, 'id_indikator');
    }

    // public function aspek() {
    //     return $this->hasMany(Aspek::class);
    // }
}
