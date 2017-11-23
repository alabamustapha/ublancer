<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
}

