<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

  protected $fillable = [
    'department_id',
    'title',
    'details',
    'price'
  ];


    // belongsTo departments

    public function department()
    {
      return $this->belongsTo('App\Department')->withDefault();
    }
}
