<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{


//    protected $connection = 'mysql2';
    protected $table = 'tbl_job_category';
    protected $fillable = ['id', 'name'];
    public $timestamps = false;
//    public static function getAll()
//    {
//        return DB::connection('mysql2')->select('id')->from('tbl_job_category')->get();
//    }
//    public function saveTicket($data)
//    {
//        $this->user_id = auth()->user()->id;
//        $this->title = $data['title'];
//        $this->description = $data['description'];
//        return $this->save();
//
//    }
//    public function updateTicket($data)
//    {
//        $ticket = $this->find($data['id']);
//        $ticket->user_id = auth()->user()->id;
//        $ticket->title = $data['title'];
//        $ticket->description = $data['description'];
//        $ticket->save();
//        return 1;
//    }

}
