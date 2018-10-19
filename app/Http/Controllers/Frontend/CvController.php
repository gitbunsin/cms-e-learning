<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\UserCv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CvController extends Controller
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
            'cv_name' => 'required',
            'cv_files' => 'required',
            'cv_description'=>'required',
        ]);
        $user_cv = new UserCv();
        $user_cv->name = Input::get('cv_name');
        if ($request->hasFile('cv_files')) {
            $image = $request->file('cv_files');
            $name = $image->getClientOriginalName();
            $size = $image->getClientSize();
            $type = $image->getMimeType();
            $destinationPath = public_path('/CVs');
            $image->move($destinationPath,$name);
            $user_cv->image= $name;
            $user_cv->type = $type;
            $user_cv->size = $size;
        }
        $user_cv->user_id = Input::get('user_id');
        $user_cv->description = Input::get('cv_description');
        $user_cv->save();
        return redirect('/ui');
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
