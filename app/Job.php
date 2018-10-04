<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $table = 'tbl_job_title';
    protected $fillable = ['job_title', 'job_description','note'];
    public $timestamps = false;
}
