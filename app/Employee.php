<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'tbl1_hr_employee';
    protected $fillable = ['emp_lastname', 'emp_firstname','emp_middle_name',''];
    public $timestamps = false;
    //
}
