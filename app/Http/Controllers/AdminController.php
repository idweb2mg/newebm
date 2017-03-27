<?php

namespace App\Http\Controllers;
use App\Http\Middleware\auth;
use Illuminate\Http\RedirectResponse;
use App\Services\PannelAdmin;

class AdminController extends Controller
{
    /**
     * Create a new AdminController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');

    }
  public function admin()
  {
      return view('admin');

  }
    /**
    * Show the admin panel.
    *
    * @return \Illuminate\Http\Response
    */




}
