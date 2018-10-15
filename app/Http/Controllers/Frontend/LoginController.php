<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
   public function singin(Request $request)
   {

      // TODO: Integrateion login user
           $rules = array(
               'email'    =>  'required',
               'password'    =>  'required'
           );

       $validate_admin_login = Validator::make(Input::all(), $rules);
       if($validate_admin_login->fails()) {
           $messages = $validate_admin_login->messages();

           $request->Session()->flash('alert-warning','Error: Incomplete details!');
           return Redirect('/singin')
               ->withErrors($messages)
               ->withInput(Input::except('password'));
       } else {

           $d = array(
               Input::get('email'), Hash::make(Input::get('password'))
           );
           $validate_admin = DB::table('users')
               ->select('email','password','status')
               ->where('email', Input::get('email'))
               ->first();
           if($validate_admin->status == 1){
               if ($validate_admin && Hash::check(Input::get('password'), $validate_admin->password)) {
                 return redirect('/administration');
               }
           }elseif ($validate_admin->status == 0){
              return redirect('/lists');
           }
       }
   }

}
