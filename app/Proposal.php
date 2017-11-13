<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $table = 'proposals';

    protected $fillable = [
    		'user_id', 'offer', 'days', 'body', 'job_id'
    ];

    public function freelancer(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function client(){
    	return $this->belongsTo('App\User', 'client_id', 'id');
    }

    public function job(){
    	return $this->belongsTo('App\Job', 'job_id', 'id');
    }

}
