<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $table = 'tbl_job_interview';
    protected $fillable = ['interview_name', 'interview_date','interview_time','note'];
    public $timestamps = false;
    //
}
