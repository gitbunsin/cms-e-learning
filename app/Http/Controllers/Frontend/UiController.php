<?php

namespace App\Http\Controllers\Frontend;

// use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Facades\DB;
use App\Candidate;
use App\CandidateAttachment;
use App\Http\Controllers\Backend\JobTitleController;
use App\Job;
use App\JobApply;
use App\JobCategory;
use App\User;
use App\Vacancy;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Psy\Util\Json;

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
//       dd($JobTitle);
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
     * function Candidate apply JobCategory.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public  function applyJobs( $id , $user_id){
//        dd($request);
        //Add to table JobCategory Candidate
        $job_candidate = new Candidate();
        $user_candidate = DB::table('users as u')
            ->select('c.*','c.id as cv_id','u.*')
            ->join('tbl_cvs as c', 'c.user_id', '=','u.id')
            ->where('c.user_id','=',$user_id)
            ->get()
            ->first();
//        http://localhost/01.php?id=$user_id


         $cv_name = $user_candidate->name;
         $cv_image = $user_candidate->image;
         $cv_type = $user_candidate->type;
         $cv_size = $user_candidate->size;
         $cv_id = $user_candidate->cv_id;

         $first_name = $user_candidate->full_name;
         $last_name = $user_candidate->full_name;
         $user_email = $user_candidate->user_email;
         $user_website = $user_candidate->website;
         $user_status = $user_candidate->status;
         $user_mobile = $user_candidate->mobile;
         $cv_name = $user_candidate->name;
         $cv_date = $user_candidate->date;
         $job_candidate->first_name = $first_name;
         $job_candidate->last_name = $last_name;
         $job_candidate->email = $user_email;
         $job_candidate->mode_of_application = 1;
         $job_candidate->status = $user_status;
         $job_candidate->contact_number = $user_mobile;
         $job_candidate->date_of_application = $cv_date;
         $job_candidate->cv_file_id = $cv_id;
         $job_candidate->save();
         $candidate_vacancy_id = $job_candidate->id;

         //add new table for Candidate Attachment
         $Candidate_Attachment = new CandidateAttachment();
         $Candidate_Attachment->candidate_id = $candidate_vacancy_id;
         $Candidate_Attachment->file_name = $cv_image;
         $Candidate_Attachment->file_type = $cv_type;
         $Candidate_Attachment->file_size = $cv_size;
         $Candidate_Attachment->save();
         $vacancy = DB::table('tbl_job_vacancy as v')
            ->select('v.*','v.id as vacancy_id','t.*')
            ->join('tbl_job_title as t', 'v.job_title_code', '=','t.id')
            ->where('v.job_title_code','=',$id)
            ->get()
            ->first();
         $vacancy_id = $vacancy->vacancy_id;
         //Add one table Job_Candidate_Vacancy
         $job_apply = new JobApply();
         $job_apply->candidate_id = $candidate_vacancy_id;
         $job_apply->vacancy_id = $vacancy_id;
         $job_apply->status = 1;
         $job_apply->applied_date = '2018-10-19 00:00:00';
         $job_apply->save();
         return redirect('/ui');
//        return Response::json(array(
//            'success' => true,
//            'data'   => $data
//        ));
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
