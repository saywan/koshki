<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class CodingLog extends Model
{
    public $timestamps=false;
    public $table='coding_log';
    protected $fillable=['URL','dataRequest','response','date'];
    protected $casts=[
        'dataRequest'=> 'json',
        'response'=> 'json',
    ];
}
