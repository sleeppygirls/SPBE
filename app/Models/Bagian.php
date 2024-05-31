<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Bagian extends Model
{
    use HasFactory;

    protected $table = 'bagians';             // memanggil nama table

    protected $primaryKey = 'id';    // primary key ny
    protected $keyType = 'integer';              // merubah type data agar terpanggil
    protected $fillable = [                     // nama kolom yang dapat di edit
        'id',
        'name',
        'id_task',
        'indikators',
    ];

    public function task() {
        return $this->hasOne(Task::class, 'id', 'id_task');
    }
}
