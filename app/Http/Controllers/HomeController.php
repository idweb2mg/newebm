<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

     public function welcome(){
        return view('welcome');
    }

    public function layout(){
       return view('layout');
   }

     public function frprojet(){
        return view('frprojet');
    }

     public function frmatrice(){
        return view('frmatrice');
    }



} // class HomeController extends Controller
