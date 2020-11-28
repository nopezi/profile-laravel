<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\App;

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
        // $url_pecah = explode('//', url('/'));
        // echo $url_pecah[0];
        // echo secure_asset('');
        // echo url('/Appland/assets/vendor/bootstrap/css/bootstrap.min.css');
        // return view('auth/login');
        return redirect('/admin');
        // return '<center>Api Profile</center>';
    }
}
