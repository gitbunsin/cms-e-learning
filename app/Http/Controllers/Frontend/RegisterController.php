<?php


namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Model\Backend\Organization;
use App\Model\Frontend\User;
//use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Prophecy\Exception\Doubler\InterfaceNotFoundException;
use Session;


class RegisterController extends Controller
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
        return view('frontend.Kh-Works.auth.register');
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
        $company = new organization();
        $company->name = Input::get('name');
        $company->email = Input::get('email');
        $company->pwd = Hash::make(Input::get('password'));
        $company->status = 1;
//        dd($employer);
        $company->save();
        Session::put('user_data', $company);
        return redirect('/administration/companyProfile');

    }
    public  function RegisterEmployee()
    {
        $this->validate(request(),
        [
            'employee_name' => 'required',
            'email_emp' => 'required|email',
            'password_emp' => 'required|min:3|max:20',
            'confirm_password_emp' => 'required|min:3|max:20|same:password_emp',
        ]);

        $UserModel = new User();
        $UserModel->setConnection('mysql2');
        $UserModel->full_name = Input::get('employee_name');
        $UserModel->user_email = Input::get('email_emp');
        $UserModel->pwd = Hash::make(Input::get('password_emp'));
        $UserModel->save();
        Session::put('user_data_login', $UserModel);
     return redirect('kh-works/lists');
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
