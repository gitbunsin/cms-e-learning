<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTitle extends Model
{
    protected $table = 'tbl_job_title';
    protected $fillable = ['id','job_title', 'job_description'];
    public $timestamps = false;
    //
}
