<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class estateimage extends Model
{
    public $table='estateimage';
    public $timestamps=false;
    public function images(){

        return $this->belongsToMany(estateinfo::class,'');
    }
}
