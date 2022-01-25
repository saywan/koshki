<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Applog extends Model
{
    public  $table='app_log';
    public  $timestamps=true;
    public $fillable=[
        'UserID','Mobile','APPVersion','AndroidVersion','DeviceModel','DeviceBrand','Method','ExceptionDate','Page',
    ];
}
