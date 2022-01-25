<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OfferEstate extends Model
{
   public  $table='offerestate';
   public  $timestamps=true;
   public $fillable=[
       'userId','Coderequest','name','mobile','regionId','estatetypeId','pricefrom','priceto','landsquarefrom','landsquareto','roomnumber','unit','postiontype','message','Code','status','priority','brith_date_buyer',
   ];
  /*  protected $casts = [
           'estatetypeId' => 'array',
           'regionId' => 'array',
       ];*/
}
