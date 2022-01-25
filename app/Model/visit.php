<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Shetabit\Visitor\Traits\Visitable;
class visit extends Model
{
   public $table='visits';
   public $timestamps=false;

   public function VisitOnline(){
       visitor()->isOnline();
   }

}
