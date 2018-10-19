<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCv extends Model
{
    //
    protected $table = 'tbl_cvs';
    protected $fillable = ['id', 'name','image','type','size','user_id','exper_id','date'];
    public $timestamps = false;
}
