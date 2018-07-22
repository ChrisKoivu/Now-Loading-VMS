<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
        /**
         * Author: Chris Koivu
         * Team: Now Loading
         * Date: 7/14/18
         *
         * 
         * fields from this model (Preference)
         * ------------------------------------
         * hours_available
         * location
         * volunteers_id
         */
        
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */

        protected $fillable = [
            'hours_available','location', 'volunteers_id'
        ];

    
        //Get the volunteer that the preferences are associated with.
        public function volunteer()
        {
            return $this->belongsTo('App\Volunteer');
        }
}
