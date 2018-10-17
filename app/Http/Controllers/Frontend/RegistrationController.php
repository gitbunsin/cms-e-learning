<?php

namespace App\Http\Controllers\Frontend;

use App\Employer;
use App\Http\Controllers\Controller;


//use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
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
            'Postal_Address'=>'required',
//            'Url'=>'required',
            'Company_Profile'=>'required',
            'password' => 'required|min:3|max:20',
            'confirm_password' => 'required|min:3|max:20|same:password',
        ]);
//        dd('I am here');
        $employer = new Employer();
        $employer->name = Input::get('name');
        $employer->email = Input::get('email');
        $employer->postal_address = Input::get('Postal_Address');
        $employer->note = Input::get('Company_Profile');
        $employer->city = Input::get('fax');
        $employer->mobile = Input::get('mobile');
        $employer->phone = Input::get('phone');
        $employer->website = Input::get('Url');
        $employer->pwd = Hash::make(Input::get('password'));
        $employer->status = 1;
//        dd($employer);
        $employer->save();
        Session::put('user_data', $employer);
//       // dd($user)
////        auth()->login($user);
       return redirect('/administration');

    }
    public  function RegisterEmployee()
    {
        $this->validate(request(), [
            'employee_name' => 'required',
            'email_emp' => 'required|email',
            'Residance_Phone'=>'required',
            'postal_address_emp'=>'required',
            'url_emp'=>'required',
            'password_emp' => 'required|min:3|max:20',
            'confirm_password_emp' => 'required|min:3|max:20|same:password_emp',
//            'mobile_number' =>'required',
        ]);
//        dd('hello');
        $employee = new User();
        $employee->full_name = Input::get('employee_name');
        $employee->user_email = Input::get('email_emp');
        $employee->address = Input::get('postal_address_emp');
        $employee->mobile = Input::get('mobile_emp');
        $employee->tel = Input::get('phone_emp');
        $employee->website = Input::get('url_emp');
        $employee->pwd = Hash::make(Input::get('password_emp'));
        $employee->status = 0;
        $employee->save();
     return redirect('ui/lists');
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
