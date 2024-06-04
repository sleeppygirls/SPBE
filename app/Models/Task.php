<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';             // memanggil nama table

    protected $primaryKey = 'id';    // primary key ny
    protected $keyType = 'string';              // merubah type data agar terpanggil
    protected $fillable = [                     // nama kolom yang dapat di edit
        'id',
        'name',
        'tahap',
        'batas',
        'tahun',
        'status',
        'desc',
    ];
    // public function bagian() {
    //     return $this->hasOne(Bagian::class, 'id_task', 'id');
    // }

    public function bagian()
    {
        return $this->belongsTo(Bagian::class,);
    }
}
