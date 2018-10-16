<?php

namespace App;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    //table vacancy
    protected $table = 'tbl_job_vacancy';
    protected $fillable = ['job_the_code', 'name','description','status'];
    public $timestamps = false;

}
