<?php

namespace App\Http\Controllers\Frontend;

// use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Backend\JobController;
use App\Job;
use App\JobCategory;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $JobCategory = JobCategory::all();
        $JobTitle = (new \App\Job)->paginate(2);
        return view('frontend.layouts.ui-main',compact('JobCategory','JobTitle'));
        //
    }

    public function scopeSearch(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
//         dd($searchTerm);
        $JobTitle = DB::table('tbl_job_title')
            ->where('job_title', 'like', '%' .$searchTerm. '%')
            ->orWhere('job_description', 'like', '%' .$searchTerm. '%')
            ->get();
//        dd($JobTitle);
        $JobCategory = JobCategory::all();
//        return redirect('/ui',compact('JobTitle','JobCategory'));
        return redirect('/ui')->with(compact('JobTitle','JobCategory'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function posts()
    {
        return view('frontend.pages.postjob');
    }
//    public function job()
//    {
//        return view('frontend.pages.Jobs');
//    }
    public  function lists()
    {

        return view('frontend.pages.list');

    }
    public  function policy()
    {
        return view('frontend.pages.policy');
    }
    public  function singin(){

        return view('frontend.pages.signin');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('frontend.pages.Jobs');

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
