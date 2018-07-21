<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request; 

/* to access volunteer model */
use App\Volunteer;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * To designate a registered user as an admin, type the 
     * following on the command line:
     * 
     * $ php artisan tinker
     * use App\User;
     * User::where('email', 'admin@admin.com')->update(['role' => 'admin']);
     * replace 'admin@admin.com' with the email address of the Admin
     */
    
    public function admin()
    {
	// get all the volunteers saved in the database
        //$volunteers = Volunteer::all()->toArray();
 
        $volunteers = DB::table('volunteers')
         ->join('statuses', 'volunteers.status_id', '=', 'statuses.id')
         ->join('users', 'volunteers.user_id', '=', 'users.id')
         ->select('volunteers.*', 'statuses.status','users.email')
         ->get();
         print_r($volunteers);
        

        return view('admin.admin', compact('volunteers'));
    }
}
