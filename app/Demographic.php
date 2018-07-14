<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demographic extends Model
{
    /**
     * Get the volunteer that the demographic is associated with.
     */
    public function volunteer()
    {
        return $this->belongsTo('App\Volunteer');
    }
}
