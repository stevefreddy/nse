<?php

namespace App\Http\Controllers;
use Validator;
use Auth;
use Redirect;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login()
    {
     return view('/login');
    }

    function checklogin(Request $request)
    {

     $user_data = array(
       'name'  => $request->get('username'),
      'password' => $request->get('password')
     );
     if(Auth::attempt($user_data))
     {
      return view('/menu');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }
    public function logout()
{
    Auth::logout(); // log the user out of our application
    return Redirect::to('/'); // redirect the user to the login screen
}
}
