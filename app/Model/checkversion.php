<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class checkversion extends Model
{
    public $fillable=['ForceUpdateType','VersionName','DownloadLink','Publish'];
    public $table='checkversion';
    public $timestamps=true;
}
