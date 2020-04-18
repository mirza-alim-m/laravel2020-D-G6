<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mk extends Model
{
    //tabel mata kuliah
    protected $table = 'mata_kuliah';
    protected $fillable = ['kelas', 'gedung'];

    //relasi tabel
    public function panggildatadosen(){
        return $this->hasMany('App\Dosens', 'mata_kuliah_id');
    }
}
