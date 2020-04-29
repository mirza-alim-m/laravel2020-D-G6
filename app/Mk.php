<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mk extends Model
{
    //tabel mata kuliah
    protected $table = 'matkul';
    protected $fillable = ['mata_kuliah'];

    //relasi tabel
    public function dosens(){
        return $this->hasMany('App\Dosens', 'id');
    }
}
