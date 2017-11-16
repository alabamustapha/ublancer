<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Category;
use App\Skill;
use App\Http\Requests;

class JobController extends Controller
{
    public function show(Job $job){
      
      $proposal = auth()->user()->job_proposal($job->id);
    	return view('jobs.show', compact(['job', 'proposal']));
    }

    public function create(){
    	$categories = Category::all();
    	$skills = Skill::all();
    	return view('jobs.create', compact(['categories', 'skills']));
    }

    public function store(Requests\StoreJobRequest $request){

    	$job = Job::create([
		  'title' => $request->title,
          'category_id' => $request->category_id,
          'description' => $request->description,
          'budget' => $request->budget,
          'days' => $request->days,
          'type' => $request->type,
          'skills' => $request->skills,
          'user_id' => auth()->user()->id
    	]);

    	return redirect()->route('job', ['job' => $job->id])->with('message', "Job created successfully");

    }
}
