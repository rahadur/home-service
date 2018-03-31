<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    //

    protected $fillable = [
        'department_id', 'location_id', 'title', 'description'
    ];


    public function department()
    {
        return $this->belongsTo('App\Department');
    }



    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
