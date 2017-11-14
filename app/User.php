<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function proposals(){
        return $this->hasMany('App\Proposal');
    }

    public function job_proposal($job_id){
        return $this->proposals()->where('job_id', $job_id)->first();
    }

    public function has_job_proposal($job_id){
        return !is_null($this->job_proposal($job_id));
    }

    public function jobs(){
        return $this->hasMany('App\Job');
    }

    public function jobs_completed(){
        return 0;
    }

    public function jobs_payments(){
        return 0;
    }

    public function getRouteKeyName(){
        return 'username';
    }
}
