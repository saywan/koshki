<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MobileTemp extends Model
{
    protected $fillable = [
        'mobile','code','send_request','lock_num','time_release',
    ];

    public  $table='mobile_temp';
   public $timestamps=false;
}
