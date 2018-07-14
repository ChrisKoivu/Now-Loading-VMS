<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    
    /**
     * Get the demographics associated with the volunteer.
     */
    public function demographics()
    {
        return $this->hasOne('App\Democraphic');
    }

    /**
     * Get the education associated with the volunteer.
     */
    public function education()
    {
        return $this->hasOne('App\Education');
    }

    /**
     * Get the emergency contact associated with the volunteer.
     */
    public function emergency_contact()
    {
        return $this->hasOne('App\EmergencyContact');
    }

    /**
     * Get the opportunities associated with the volunteer.
     */
    public function opportunities()
    {
        return $this->hasMany('App\Opportunity');
    }

    /**
     * Get the location & hours preferences associated with 
     * the volunteer.
     */
    public function preference()
    {
        return $this->hasOne('App\Preference');
    }

    /**
     * Get the professional licenses associated with the volunteer.
     */
    public function professional_licenses()
    {
        return $this->hasMany('App\ProfessionalLicense');
    }

    /**
     * Get the skills associated with the volunteer.
     */
    public function skills()
    {
        return $this->hasMany('App\Skill');
    }

    /**
     * Get the approval status associated with the volunteer.
     */
    public function status()
    {
        return $this->hasOne('App\Status');
    }

    /**
     * Get the user that the volunteer is associated with.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
