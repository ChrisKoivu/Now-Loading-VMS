<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demographic extends Model
{

    /**
     * Author: Chris Koivu
     * Team: Now Loading
     * Date: 7/14/18
     * 
     * Fields for this model:
     * street_address
     * city
     * state
     * zip
     * home_phone
     * work_phone
     * cell_phone
     * volunteers_id
     * 
     */

      /**
         * The attributes that are mass assignable.
         *
         * @var array
         */

        protected $fillable = [
            'street_address', 'city','state', 
            'zip', 'home_phone','work_phone',
            'cell_phone', 'volunteers_id'
        ];

    /**
     * Get the volunteer that the demographic is associated with.
     */
    public function volunteer()
    {
        return $this->belongsTo('App\Volunteer');
    }
}
