<?php

namespace App\Http\Controllers\Backend;

// use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class BackendController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        return view('Backend.HRIS.layouts.cms-layouts');
    }
}
