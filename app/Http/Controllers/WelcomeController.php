<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
  /**
   * Show the Welcome page when a user visits 
   * website url
   * 
   */


  public function index(){


   return view('welcome');

  }


}
