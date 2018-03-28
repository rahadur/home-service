<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  // hasMany packahes
  public function packages()
  {
    return $this->hasMany('App\Package');
  }
}
