<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    /**
     * fields from the User Model
     * ------------------------------
     *  'name', 'email', 'password'
     *   docs ask for First Name, Last Name, Username, Password, email
     * 
     * fields from this model (Volunteer)
     * ------------------------------------
     *  Whether there is a copy of volunteer’s drivers license on file 
     *  Whether there is a copy of volunteer’s social security card on file
     *  Volunteer’s Approval Status 
     * 
     * handled by the isAdmin middleware ###
     * Administrator adds the volunteer data. 
     * 
     * 
     */

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */

        // to deal with Mass Assignment
        protected $fillable = [
            'driver_license', 'social_security', 'approval_status',
        ];

    
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
