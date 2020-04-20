<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mk extends Model
{
    //tabel mata kuliah
    protected $table = 'mata_kuliah';
    protected $fillable = ['kelas', 'gedung'];

    //relasi tabel
    public function dosens(){
        return $this->hasMany('App\Dosens');
    }
}
