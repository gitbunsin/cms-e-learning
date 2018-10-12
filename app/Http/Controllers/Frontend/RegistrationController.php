<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;


//use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Prophecy\Exception\Doubler\InterfaceNotFoundException;
use Session;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.pages.register');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3|max:20',
            'confirm_password' => 'required|min:3|max:20|same:password',
        ]);
        $user = new User();
//        dd($user);
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->password = Input::get('password');
        $user->status = 1;
        $user->save();
        Session::put('user_data', $user);
       // dd($user)
//        auth()->login($user);
     return redirect('/administration');

    }
    public  function RegisterEmployee()
    {
        $this->validate(request(), [
            'email_emp' => 'required',
            'email_emp' => 'required|email',
            'password_emp' => 'required|min:3|max:20',
            'confirm_password_emp' => 'required|min:3|max:20|same:password_emp',
//            'mobile_number' =>'required',
        ]);
        $employee_user = new User();
        $employee_user->name = Input::get('email_emp');
        $employee_user->email = Input::get('email_emp');
        $employee_user->password = Input::get('password_emp');
        $employee_user->status = 0;
        $employee_user->save();
     return redirect('/lists');
    }
        //

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
