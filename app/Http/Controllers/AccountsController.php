<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function index($user)
    {


      $user = User::find($user);


        return view('accounts.index', [
           
         'user' => $user,

        ]);
    }
}

