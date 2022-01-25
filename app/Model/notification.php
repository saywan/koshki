<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    public $table='notifications';
    public  $timestamps=false;
    public $fillable=['EstateId','notiyType','url','seen','text','datetime','datereg'];
}
