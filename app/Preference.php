<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
     /** 
     * 
     * fields from this model (Preference)
     * ------------------------------------
     * Hours Available
     * Location
     */
     
    /**
     * Get the volunteer that the preferences are associated with.
     */
    public function volunteer()
    {
        return $this->belongsTo('App\Volunteer');
    }
}
