<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('website.home');
    }
    public function majors()
    {
        return view('website.majors');
    }
    public function login()
    {
        return view('dashboard.auth.login');
    }
    public function profile()
    {
        return view('website.profile');
    }
}
