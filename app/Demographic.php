<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demographic extends Model
{

    /**
     * Fields for this model:
     * Street Address 
     * City
     * State
     * Zip
     * Home Phone
     * Work Phone
     * Cell Phone
     * 
     * 
     */


    /**
     * Get the volunteer that the demographic is associated with.
     */
    public function volunteer()
    {
        return $this->belongsTo('App\Volunteer');
    }
}
