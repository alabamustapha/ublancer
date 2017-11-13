<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Category;
use App\Skill;

class FreelancerController extends Controller
{
    public function jobs(){
    	
    	$jobs = Job::all();
    	return view('freelancer.jobs', compact(['jobs']));
    	
    }
}
