<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Skill;

class Job extends Model
{
    protected $table = "jobs";

    protected $fillable = [
    	'title','category_id','description','budget','days','type','file','skills', 'status', 'user_id'
    ];


    protected $casts = [
        'skills' => 'array',
    ];

    public function setSkillsAttribute($value)
    {
        $this->attributes['skills'] = json_encode($value);
    }

    public function getSkillsAttribute($value)
    {
        return Skill::whereIn('id', json_decode($value))->pluck('name')->toArray();
    }

    public function getDaysAttribute($value)
    {
        return $value == 1 ? $value . " Day" : $value . " Days";  
    }

    public function client(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function proposals(){
        return $this->hasMany('App\Proposal');
    }


}
