<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    /**
     * Get the volunteer that owns the opportunity.
     */
    public function volunteer()
    {
        return $this->belongsTo('App\Volunteer');
    }
}
