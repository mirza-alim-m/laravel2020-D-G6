<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jam_Kuliah extends Model
{
    //
    protected $table = 'jam_kuliahs';
    protected $fillable = [
        'dosen_id'
        , 'ruang_id'
        , 'hari'
        , 'jam'
        , 'image'
        , 'pdf'
    ];

    public function dosens()
    {
        return $this->belongsTo('App\Dosens', 'dosen_id');
    }

    public function ruangs()
    {
        return $this->belongsTo('App\Ruang', 'ruang_id');
    }
}
