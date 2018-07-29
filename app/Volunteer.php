<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    /**
     * Author: Chris Koivu
     * Team: Now Loading
     * Date: 7/14/18
     *
     * Fields imported from the User Model
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
      
     * Only Admin can edit or add volunteer data
     * if authorized by the isAdmin middleware
     * 
     * 
     * 
     */

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */

        protected $fillable = [
            'first_name', 'last_name','dl_on_file', 
            'ss_card_on_file', 'status_id','user_id'
        ];

    
   
    

    
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
