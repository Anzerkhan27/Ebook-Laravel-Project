<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
   
/**
     * Show the account page of a specified user.
     * Restric a user from only be able to see their account
     * This was adapted from an anwser from ZeroOne on Apr 18 2018 posted on StackOverflow here:
     * https://stackoverflow.com/questions/49951125/laravel-restrict-users-to-only-be-able-to-see-their-own-profile
     * 
     * @param  $user
     * @return \Illuminate\Http\Response
     */  
   
  public function index($user)
    {


      $user = User::findorfail($user);

      // valid user
      if(Auth::id() == $user->id) {
   
      $user = Auth::user();
       
      return view('accounts.index', compact('user')  );


     }else {

       abort(403, 'Unauthorized action.');
       

   }
    }
}

