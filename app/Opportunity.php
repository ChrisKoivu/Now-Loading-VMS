<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{

    /**
     * Author: Chris Koivu
     * Team: Now Loading
     * Date: 7/14/18
     *
     * Fields for this model
     * name
     * description 
     * volunteers_id
     * 
     */

     /**
         * The attributes that are mass assignable.
         *
         * @var array
         */

        protected $fillable = [
            'name', 'description', 'volunteers_id'
        ];

    /**
     * Get the volunteer that owns the opportunity.
     */
    public function volunteer()
    {
        return $this->belongsTo('App\Volunteer');
    }
}
