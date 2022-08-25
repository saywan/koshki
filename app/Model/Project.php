<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $table='project';

    public $timestamps=true;
    protected  $fillable=[
        'userId','OwenershipTypeId','MobileNumber','Email','fullname','Code','TrackingCode','UsageTypeId','EstateTypeId','RegionId','Address','LandTotalSquare','SquareFootage','RoomNumber','ComplimentalDescription','textNote','status','advType','position_adv','floor','unit','unitnumber','unitfloor','elevator','parking','warehouse','Balcony','loan','exchange','loanAmount','yearmade','price','price_rahan','RentAmount','VirtualTourRequest','publish','Address_user_kurdish',
        'VisitCount','VirtualTourCode','EstateDateTimeRegister','dateEn','boosted','textStatus','estateVIP','lat','lng',
    ];

}
