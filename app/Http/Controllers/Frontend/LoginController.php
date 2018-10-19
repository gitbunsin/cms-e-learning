<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Psy\Util\Json;
use Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
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
           return Redirect('ui/singin')
               ->withErrors($messages)
               ->withInput(Input::except('password'));
       } else {

           $d = array(
               Input::get('email'), Hash::make(Input::get('password'))
           );
           $validate_admin = DB::table('users')
               ->select('id','full_name','user_email','pwd','status')
               ->where('user_email', Input::get('email'))
               ->first();

           $CVs = DB::table('users')
               ->join('tbl_cvs', 'users.id', '=', 'tbl_cvs.user_id')
               ->select('tbl_cvs.user_id', 'users.*')
               ->where('user_email', Input::get('email'))
               ->get()
               ->first();
//             dd($CVs);
//              dd($validate_admin);
           Session::put('user_data_login', $validate_admin);
           if ($validate_admin && Hash::check(Input::get('password'), $validate_admin->pwd)) {
               if($CVs){
                   return Redirect('ui');
               }else{
                   return Redirect('ui/lists');
               }

           }else{
               $request->Session()->flash('message', "Special message goes here");
               return Redirect('ui/singin');
           }
//               if ($validate_admin && Hash::check(Input::get('password'), $validate_admin->password)) {
//                 return redirect('/administration');
//               }else {
//                   $request->Session()->flash('message', "Special message goes here");
//                   return Redirect('ui/singin');
//               }
           }
       }
}
