<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

class LoginController extends Controller
{
     public function login(Request $req)
     {
      $email = $req->input('email');
      $password = $req->input('password');

      $checkLogin = DB::table('users')->where(['email'=>$email,'password'=>$password])->get();
      if(count($checkLogin)  >0)
      {
        return view('home');

      
      }
      else
      {
       return back()->withInput()->withErrors(['email' =>'Email atau Password salah']);
     }
   }
}

?>
