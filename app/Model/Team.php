<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public  $table='team';
    public  $timestamps=false;
    protected $fillable = [
        'name','job','mobile','email','avatar','linkedin','facebook','instagram','telegram','whatup','time','datereg',

    ];
}
