<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProblemReply extends Model
{
    //
    protected $fillable = [
      'problem_id', 'from_user_id', 'to_user_id', 'message'
    ];


    public function problem()
    {
        return $this->belongsTo(Problem::class);
    }

    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    public function toUser()
    {
        return $this->belongsTo(User::class, 'to_user_id');
    }





}
