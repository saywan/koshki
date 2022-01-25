<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SetTimeVisitor extends Model
{
   public $table='settimevisitor';
   public  $timestamps=true;
   protected $fillable=['visitor_id','EstateId','FullnameBuyer','TellBuyer','FullnameSeller','TellSeller','price',
       'datevisit','timevisit','description','status','address'];
}
