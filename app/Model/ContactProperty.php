<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ContactProperty extends Model
{
    public $timestamps = true;
    public $table = 'contactproperty';
    public $guarded = [];
}
