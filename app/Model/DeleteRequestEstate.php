<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DeleteRequestEstate extends Model
{
   public  $table='DeleteRequestEstate';
   public $fillable=['EstateId','userId','datereg'];
   public $timestamps=true;
}
