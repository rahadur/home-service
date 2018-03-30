<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'location_id', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function roles()
    {
      return $this->belongsToMany(Role::class);
    }


    public function location()
    {
      return $this->belongsTo(Location::class);
    }


    public function orders()
    {
      return $this->hasMany(\App\Order::class);
    }


    public function notifications()
    {
        return $this->hasMany(\App\Notification::class);
    }




    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
          if (!is_null($this->hasAnyRole($roles)))
            return true;

          return false;
        }

        if (!is_null($this->hasRole($roles)))
          return true;

        return false;
    }




    /**
    * Check multiple roles
    * @param array $roles
    */

    public function hasAnyRole($roles)
    {
      return $this->roles()->whereIn('name', $roles)->first();
    }




    /**
    * Check one role
    * @param string $role
    *
    *@return null | $user
    */

    public function hasRole($role)
    {
      return $this->roles()->where('name', $role)->first();
    }
}
