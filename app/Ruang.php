<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    //
    protected $table = 'ruang';
    protected $fillable = [
        'kelas'
        ,'gedung'
        ,'image'
        ,'pdf'
        
    ];

    public function jamkuliahs(){
        return $this->hasMany('App\Jam_Kuliah', 'id');
    }

    
}
