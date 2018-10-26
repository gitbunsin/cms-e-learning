<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\organization;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//      $CompanyProfiles = DB::table('tbl_organization_gen_info')->get()->first();
        return view('backend.HRIS.Admin.Company.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\organization  $company
     * @return \Illuminate\Http\Response
     */
    public function show(organization $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\organization  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(organization $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\organization  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, organization $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\organization  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(organization $company)
    {
        //
    }
}
