<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function singin()
   {
//       dd($request);
        // TODO: Integrateion login user
       $this->validate(request(), [
           'email' => 'required|email',
           'password' => 'required|min:3|max:20',
       ]);
       $user = new User();
       $user->email = Input::get('email');
       $user->password = Input::get('password');
       $userlog = User::all()->first();
       $validate_admin = DB::table('users')->select('email')->where('email', Input::get('email'))->first();
       if($validate_admin && Hash::check(Input::get('password') , $userlog->password))
       {
//           $id = $user::where('status',0)->get()->toArray();
//           dd($id[0]["status"]);
 //             dd($id);
//            $test = $userlog->status ;
//            dd($test);
           return redirect('/administration');
       }else{

           return redirect('/lists');
       }

   }

}
