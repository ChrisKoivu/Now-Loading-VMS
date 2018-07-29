<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmergencyContact extends Model
{
    /**
     * Author: Chris Koivu
     * Team: Now Loading
     * Date: 7/14/18
     *
     * Fields for this model 
     * ----------------------
     * 
     * name
     * street_address
     * city
     * state
     * zip
     * home_phone
     * work_phone
     * email_address
     * de_id
     * demographic_id
     *
     */

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */

        protected $fillable = [
            'name','street_address', 'city','state', 
            'zip', 'home_phone','work_phone',
            'cell_phone', 'demographic_id'
        ];


    /**
     * Get the volunteer that the emergency contact is associated with.
     */
    public function demographic()
    {
        return $this->belongsTo('App\Demographic');
    }
}
