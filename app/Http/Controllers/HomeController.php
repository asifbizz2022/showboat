<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

  
    public function index()
    {
        return view('home');
    }

    public function get_user_data()
    {
        $result = DB::table('user_list')->get();
        
        return view('user-data')->with(['users'=> $result]);
    }
}
