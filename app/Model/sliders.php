<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class sliders extends Model
{
    public $table='sliders';
    public $timestamps=false;
    protected  $fillable = ['title','message', 'name_image', 'photo',];

}
