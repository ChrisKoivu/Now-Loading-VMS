<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.admin');
    }
}
