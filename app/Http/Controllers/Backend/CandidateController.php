<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Candidate;
use App\CandidateAttachment;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use PhpParser\Node\Scalar\String_;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidate = Candidate::all();
        //dd($Candidate);
        return view('backend.Recruiment.Candidate.index',compact('candidate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.Recruiment.Candidate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $candidate = new Candidate();
        $candidate->first_name = Input::get('first_name');
        $candidate->last_name = Input::get('last_name');
        $candidate->middle_name = Input::get('middle_name');
        $candidate->email = Input::get('email');
        $candidate->status = 1;
        $candidate->mode_of_application = 1;
        $candidate->cv_file_id = 1;
        $input  = Input::get('date-of-application');
        $dat_of_application = Carbon::parse($input )->format('Y-m-d');
        $candidate->date_of_application = $dat_of_application;
//        $file = Input::file('cv_file_id');
        //dd($request->all());
        if ($request->hasFile('cv_file_id')) {
            $image = $request->file('cv_file_id');
            $mytime = \Carbon\Carbon::now()->toDateTimeString();
            $name = $image->getClientOriginalName();
//            dd($name);
            $myname = date('Y-m-d H:i:s').".$name";
//            $myname = $mytime.'_'.$name;
            $size = $image->getClientSize();
            $type = $image->getMimeType();
            $destinationPath = public_path('/uploaded');
            $image->move($destinationPath,$myname);
            $CandidateAttachment = new CandidateAttachment();
            $CandidateAttachment->candidate_id = 1;
            $CandidateAttachment->file_name = $name;
            $CandidateAttachment->file_size = $size;
            $CandidateAttachment->file_type = $type;
            $CandidateAttachment->save();
        }
//         dd($request->all());
        $candidate->save();
        return redirect('/administration/cadidate');
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