<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class estateinfo extends Model
{
    public $table='estateinfo';
   // public $table='copy_estateinfo';
    public $timestamps=true;
    protected  $fillable=[
        'userId','OwenershipTypeId','MobileNumber','Email','fullname','Code','TrackingCode','UsageTypeId','EstateTypeId','RegionId','Address','LandTotalSquare','SquareFootage','RoomNumber','ComplimentalDescription','textNote','status','advType','position_adv','floor','unit','unitnumber','unitfloor','elevator','parking','warehouse','Balcony','loan','exchange','loanAmount','yearmade','price','price_rahan','RentAmount','VirtualTourRequest','publish',
        'VisitCount','VirtualTourCode','EstateDateTimeRegister','dateEn','boosted','textStatus','estateVIP','lat','lng',
   ];
   /* protected $guarded =['created_at','updated_at'];*/
    /*protected $casts = [
        'price' => 'array',
    ];*/
   /* protected $dates = ['created_at','deleted_at'];*/
}
