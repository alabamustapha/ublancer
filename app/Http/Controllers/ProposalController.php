<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Http\Requests;
use App\Proposal;

class ProposalController extends Controller
{
    public function store(Requests\StoreProposalRequest $request, Job $job){
    	
    	$proposal = Proposal::create([
    			'body' => $request->body,
    			'offer' => $request->offer,
    			'user_id' => auth()->user()->id,
    			'days' => $request->days,
    			'job_id' => $job->id,
    	]);

    	return back()->with('proposal', $proposal)->with('message', "proposal sent");
    }
}
