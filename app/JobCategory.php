<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    //
    protected $table = 'tbl_job_category';
    protected $fillable = ['id', 'job_title','job_description'];
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
