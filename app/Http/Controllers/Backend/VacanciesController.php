<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vacancy;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancy = Vacancy::all();
        //dd($vacancy);
        return view('backend.Recruiment.Vacancy.index',compact('vacancy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.Recruiment.Vacancy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vacancy = new Vacancy();
        $vacancy->job_title_code = 1;
        $vacancy->hiring_manager_id = 1;
        $vacancy->name=Input::get('name');
        $vacancy->description=Input::get('description');
        $vacancy->no_of_positions=1;
        $vacancy->status = 1;
        $vacancy->published_in_feed = 1;
        $vacancy->defined_time = '2018-10-04';
        $vacancy->updated_time = '2018-10-04';
        //dd($vacancy);
        $vacancy->save();
        return redirect("/administration/vacancy");
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
        $vacancy = Vacancy::FindorFail($id);
        return view('backend.Recruiment.Vacancy.edit',compact('vacancy','id'));
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

        $vacancy = Vacancy::findOrFail($id);
//        dd($candidate);
        $input = $request->all();
        $vacancy->fill($input)->save();
        $request->session()->flash('alert-success', 'New Candidate has been updated!!!');
        return redirect('/administration/vacancy');
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

        $vacancy = Vacancy::findOrFail($id);
        $vacancy->delete();
        Session::flash('alert-danger', 'Job successfully deleted!');
        return redirect('/administration/candidate');
    }
}
