<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    /**
     * fields from the User Model
     * ------------------------------
     *  'name', 'email', 'password'
     *  
     * fields from this model (Volunteer)
     * ------------------------------------
     *  first_name
     *  last_name
     *  dl_on_file 
     *  ss_card_on_file
     * 
     *  status_id - references status table
     *  ------------------------------
     *  1 - Pending Approval, 2 - Approved, 3 - Disapproved,
     *  4 - Inactive
     * 
     *  Eloquent relationship takes care of this:
     *  --------------------------
     *  user_id - references to users table 
     * 
     * if authorized by the isAdmin middleware ###
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
            'first_name', 'last_name','dl_on_file', 
            'ss_card_on_file', 'status_id',
        ];

    
    /**
     * Get the demographics associated with the volunteer.
     */
    public function demographics()
    {
        return $this->hasOne('App\Demographic');
    }

    /**
     * Get the education associated with the volunteer.
     */
    public function education()
    {
        return $this->hasMany('App\Education');
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
     * Get the user that the volunteer is associated with.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
