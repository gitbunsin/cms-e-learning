<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $table = 'tbl_organization_gen_info';
    protected $fillable = ['name', 'phone','email','country'];
    public $timestamps = false;
    //
}