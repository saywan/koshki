<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class daliyreport extends Model
{
    protected $fillable = [
        'userId','title','text','result_text','typeresult','status','datereg',
    ];
    public $table='daliy_report';
    public $timestamps=true;
}
