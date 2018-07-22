<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * Author: Chris Koivu
     * Team: Now Loading
     * Date: 7/14/18
     *
     * Fields for this model
     * skill
     * volunteers_id
     */

      /**
         * The attributes that are mass assignable.
         *
         * @var array
         */

        protected $fillable = [
            'skill', 'volunteers_id',
        ];

        /**
         * Get the volunteer that the skills are associated with.
         */
        public function volunteer()
        {
            return $this->belongsTo('App\Volunteer');
        }
}
