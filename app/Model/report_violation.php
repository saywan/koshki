<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class report_violation extends Model
{
   public $table='report_violation';
   public $timestamps=true;
   protected $fillable=[
       'userId','EstateId','text','datereg'
   ];
}
