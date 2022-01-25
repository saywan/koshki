<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VisitorOnline extends Model
{
   public  $table='visitoronline';
   public  $timestamps=true;

    protected $fillable = [ 'ip', 'visit_date' ];


    public static function boot() {
        parent::boot();
      /*  static::creating(function ($tracker) {
            $tracker->hit = 0;
        } );*/

        // Any time the instance is saved (create OR update)
        static::saving(function ($tracker) {
            $tracker->visit_date = date('Y-m-d');
            $tracker->visit_time = date('H:i:s');
          /*  $tracker->hit++;*/
        } );
    }

    public function scopeCurrent($query) {
        return $query->where('ip', $_SERVER['REMOTE_ADDR'])
            ->where('visit_date', date('Y-m-d'));
    }
    public static function hit() {
        /* $test= request()->server('REMOTE_ADDR');
         echo $test;
         exit();*/
        static::firstOrCreate([
            'ip'   => $_SERVER['REMOTE_ADDR'],
            'visit_date' => date('Y-m-d'),
            'visit_time' => date('H:i:s'),
            // exit()
        ])->save();

    }
}
