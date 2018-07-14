<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    /**
     * Get the opportunities associated with the user.
     */
    public function opportunities()
    {
        return $this->hasMany('App\Opportunity');
    }

    /**
     * Get the user that the volunteer is associated with.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
