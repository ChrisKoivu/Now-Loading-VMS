<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{

    /**
     * Fields for this model
     * Name
     * Description 
     */

    /**
     * Get the volunteer that owns the opportunity.
     */
    public function volunteer()
    {
        return $this->belongsTo('App\Volunteer');
    }
}
