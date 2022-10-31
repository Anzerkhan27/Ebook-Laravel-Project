<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
   
/**
     * Show the account page of a specified user.
     *
     * @param  $user
     * @return \Illuminate\Http\Response
     */  

  
  
  
  
  
  public function index($user)
    {


      $user = User::findorfail($user);


      if(Auth::id() == $user->id) {
       // valid user
       $user = Auth::user();
       
        return view('accounts.index', [
             'user' => $user,]  );


   }else {

       abort(403, 'Unauthorized action.');
       

   }
    }
}

