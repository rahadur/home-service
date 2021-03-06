<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }


    public function worker()
    {
        return $this->belongsTo(\App\User::class, 'worke_id');
    }



    public function package()
    {
        return $this->belongsTo(\App\Package::class);
    }


    public function location()
    {
        return $this->belongsTo(\App\Location::class);
    }


    public function notifications()
    {
        return $this->hasMany(\App\Notification::class);
    }
}
