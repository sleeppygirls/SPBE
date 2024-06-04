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
        'id_user',
        'id_task',
        'indikators',
    ];

    public function task() {
        return $this->hasOne(Task::class, 'id', 'id_task');
    }

    public function user() {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    //  public function task()
    // {
    //     return $this->belongsTo(Task::class, 'id_task');
    // }
}
