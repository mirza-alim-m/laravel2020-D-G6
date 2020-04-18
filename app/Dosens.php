<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosens extends Model
{
    //
    protected $table = 'dosen';
    protected $fillable = [
        'dosen_nip'
        , 'dosen_nama'
        , 'mata_kuliah_id'
        , 'dosen_no_telpon'
        , 'dosen_alamat'
    ];

    public function matkuls()
    {
        return $this->belongsTo('App\Mk', 'mata_kuliah_id');
    }
}
