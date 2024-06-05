<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileData extends Model
{
    use HasFactory;

    protected $fillable = ['id_indikator', 'id_task', 'id_user', 'name', 'files'];

    protected $casts = [
        'files' => 'array', // Memberikan tipe array ke kolom files
    ];

    //     public function indikator()
    //     {
    //         return $this->belongsTo(Indikator::class, 'id_indikator');
    //     }

    //     public function task()
    //     {
    //         return $this->belongsTo(Task::class, 'id_task');
    //     }

    //     public function user()
    //     {
    //         return $this->belongsTo(User::class, 'id_user');
    //     }

    public function indikator()
    {
        return $this->belongsTo(Indikator::class, 'id_indikator');
    }

    public function task()
    {
        return $this->belongsTo(Task::class, 'id_task');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
