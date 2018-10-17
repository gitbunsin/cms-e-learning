<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job = Job::all();
        return view('backend.Recruiment.Job.index',compact('job'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.Recruiment.Job.create');
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
        $job = new Job();
        $job->job_title=Input::get('job_title');
        $job->job_description=Input::get('job_description');
        $job->note=Input::get('note');
        $job->is_deleted = 1;
        //dd($job);
        $job->save();
        return redirect("/administration/job");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       return view('backend.Recruiment.Job.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobs = Job::where('id',$id)->first();
        //dd($jobs);
        return view('backend.Recruiment.Job.edit', compact('jobs', 'id'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request , $id)
    {
        $job = Job::findOrFail($id);
        //dd($job);
        $input = $request->all();
        $job->fill($input)->save();
        $request->session()->flash('alert-success', 'New Job has been updated!!!');
        return redirect('/administration/job');
//        $hello ="i'm so ok";
//        dd($hello);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job $job
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy($id)
    {
//        $hello ="I will deleted you from my heart";
//        dd($hello);
        $job = Job::findOrFail($id);
        $job->delete();
        Session::flash('alert-danger', 'Job successfully deleted!');
        return redirect('/administration/job');
        //
    }
}
