<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmergencyContact extends Model
{
    /**
     * Fields for this model 
     * ----------------------
     * Name
     * Address
     * City
     * State
     * Zip
     * Home Phone
     * Work Phone
     * Email Address
     */


    /**
     * Get the volunteer that the emergency contact is associated with.
     */
    public function volunteer()
    {
        return $this->belongsTo('App\Volunteer');
    }
}
