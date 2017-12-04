<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use App\User;
use App\Flash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{

    public function getRegister() {
        return view('register');
     }

     public function postRegister(Request $request)
     {
         $user = User::create([
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'password' => bcrypt($request->get('password')),
       ]);
         if($user){
            //flash message using session

            return '1';
            // flash()->success('You have been Registered.');
         }
         else{
            return '0';
         }
     }

     public function getLogin(){

         $user= User::get()->all();
         return view('login',compact('user'));
     }

     public function postLogin(Request $request){
         $userdata = array(
        'email'     => $request->get('email'),
        'password'  => $request->get('password'),
    );
         if (Auth::attempt($userdata)) {
            Session::flash('flash_message','successfully Logged In.');
            return Redirect::route('success');
         }
         else {
        return redirect::to('register');
            }
     }

     public function getWelcome() {
         $user= User::get()->all();
         return view('success',compact('user'));
     }

     public function doLogout() {
        Auth::logout();
        Session::flush();
        return Redirect::to('register');
     }
}
