<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $table = 'tbl_jobs';
    protected $fillable = ['Companyname', 'Contactname','alt_email','postingDate','Jobresponsible'];
    public $timestamps = false;
}
