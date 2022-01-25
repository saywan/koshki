<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    public  $table='contract';
    public  $timestamps=true;
    public $fillable=[
        'userId', 'regionId', 'estatetypeId', 'lordname', 'lordmobile','tenant', 'tenantmobile', 'delivery_date', 'date_start', 'date_end', 'amount_per_month', 'Deposit', 'address', 'status', 'platform', 'datereg','brith_date_buyer','brith_date_seller'
    ];

}
