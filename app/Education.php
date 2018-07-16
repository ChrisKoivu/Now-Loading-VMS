<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    /**
     * Fields for this model:
     * ---------------------
     * Diploma
     * High School
     * Degree
     * College
     * 
     * 
     */

    /**
     * Get the volunteer that the education is associated with.
     */
    public function volunteer()
    {
        return $this->belongsTo('App\Volunteer');
    }
}
