<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;

class ProfileController extends Controller
{
    public function show(User $user){
    	return view('users.profile', compact(['user']));
    }

    public function dashboard(User $user){
    	return view('users.dashboard', compact(['user']));
    }

    public function showRequests(User $user){
        return view('client.requests', compact(['user']));
    }

    public function showRequestsById(User $user, Job $job){
      
        $proposal = auth()->user()->jobs()->find($job->id)->proposals()->orderBy('proposals.created_at','desc')->get();
        return view('client.requests_detail', compact(['user','proposal','job']));
    }
    
}

