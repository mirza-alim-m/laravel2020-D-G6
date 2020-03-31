<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mk extends Model
{
    //tabel mata kuliah
    protected $table = 'mata_kuliah';
    protected $fillable = ['mata_kuliah', 'dosen_nip'];

    //relasi tabel
    public function panggildatadosen(){
        return $this->belongsTo('App\dosen');
    }
}
