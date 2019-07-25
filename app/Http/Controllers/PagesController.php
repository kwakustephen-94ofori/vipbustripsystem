<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;
use App\User;

class PagesController extends Controller
{
    
    public function index(){

    	return view('Pages.index');
    }

    public function login(){

    	return view('Pages.login');
    }

    public function Postlogin(Request $request){

          
          if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password, 'user_type'=>'Super Admin'], $request->remember))
        {

            return redirect()->route('superadmin_index');
        }

        elseif(Auth::attempt(['email'=>$request->email, 'password'=>$request->password, 'user_type'=>'Normal Admin'], $request->remember)){
            return redirect()->route('normaladmin_index');
        }

        else{
            return redirect()->route('login')->with(['login-error'=>'Invalid Login Credentials!']);
        }


    }    

    public function superadminIndex(){

        return view('Pages.superadmin_index');
    }

    public function normaladminIndex(){

        return view('Pages.normaladmin_index');
    }

    public function logout(){
         
        Auth::logout();
        return redirect()->route('login');
    }

   
   }



