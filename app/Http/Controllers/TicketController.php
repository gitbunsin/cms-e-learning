<?php

namespace App\Http\Controllers;
use App\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TicketController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = JobCategory::where('user_id', auth()->user()->id)->get();
        $all = JobCategory::all();

        return view('user.index',compact('tickets'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $this->validate($request, [
            'description'=>'required',
            'title'=> 'required'
        ]);
        $ticket = new JobCategory();
//        $data['user_id'] = 4;
//        $data['title'] = $request->input('title');
//        $data['description'] = $request->input('description');
        $ticket->saveTicket($data);
        return redirect('/home')->with('success', 'New support ticket has been created! Wait sometime to get resolved');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = JobCategory::where('user_id', auth()->user()->id)
            ->where('id', $id)
            ->first();

        return view('user.edit', compact('ticket', 'id'));
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
        $ticket = new JobCategory();
        $data = $this->validate($request, [
            'description'=>'required',
            'title'=> 'required'
        ]);
        $data['id'] = $id;
        $data['user_id'] = 4;
        $data['title'] = $request->input('title');
        $data['description'] = $request->input('description');
        $ticket->updateTicket($data);
        return redirect('/home')->with('success', 'New support ticket has been updated!!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = JobCategory::find($id);
        $ticket->delete();

        return redirect('/home')->with('success', 'JobCategory has been deleted!!');
    }
}
