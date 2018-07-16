<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessionalLicense extends Model
{
    /**
     * Fields for this model
     * License
     * 
     * 
     */



    /**
     * Get the volunteer that the professional licenses are 
     * associated with.
     */
    public function volunteer()
    {
        return $this->belongsTo('App\Volunteer');
    }
}
