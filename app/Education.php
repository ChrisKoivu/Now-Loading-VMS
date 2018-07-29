<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    /**
     * Author: Chris Koivu
     * Team: Now Loading
     * Date: 7/14/18
     *
     * Fields for this model:
     * --------------------
     * degree
     * school
     * demographic_id
     * 
     * 
     */

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */

        protected $fillable = [
            'degree', 'school', 'demographic_id'
        ];


    /**
     * Get the volunteer that the education is associated with.
     */
    public function volunteer()
    {
        return $this->belongsTo('App\Volunteer');
    }
}
