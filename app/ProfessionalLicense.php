<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessionalLicense extends Model
{
        /**
         * Author: Chris Koivu
         * Team: Now Loading
         * Date: 7/14/18
         *
         * Fields for this model
         * ---------------------
         * name
         * description
         * demographic_id
         * 
         */

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */

        protected $fillable = [
            'name','description', 'demographic_id'
        ];



        /**
         * Get the volunteer that the professional licenses are 
         * associated with.
         */
        public function volunteer()
        {
            return $this->belongsTo('App\Volunteer');
        }
}
