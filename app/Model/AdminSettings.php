<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminSettings extends Model
{
    public  $table='admin_settings';
    protected $guarded = array();
    public  $timestamps=false;

}
