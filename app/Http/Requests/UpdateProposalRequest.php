<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProposalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
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
                'terms' =>      'accepted',
        ];
    }
}
