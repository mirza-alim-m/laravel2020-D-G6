<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    //
    protected $table = 'ruangs';
    protected $fillable = [
        'kelas'
        ,'gedung'
    ];

    public function dosenss()
    {
        return $this->hasMany('App\Dosens');
    }
}
