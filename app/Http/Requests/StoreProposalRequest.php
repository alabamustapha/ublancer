<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Proposal;
use App\Job;

class StoreProposalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {   
        $job = Job::find($this->route('job'))->first();    
        return Proposal::where('user_id', auth()->user()->id)->where('job_id', $job->id)->count() == 0;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'body' =>       'required|min:20|string',
                'offer' =>      'required|integer|min:5',
                'user_id' =>    'required|integer|exists:users,id',
                'days' =>       'required|integer|min:1',
                'job_id' =>     'required|integer|exists:jobs,id',
        ];
    }
}
