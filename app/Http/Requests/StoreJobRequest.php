<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
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
          'title' => "required|min:5|max:255",
          'category_id' => "required|exists:categories,id",
          'description' => "required|min:20",
          'budget' => "required|integer|min:5",
          'days' => "required|min:",
          'type' => "required|in:fixed,hourly",
          'file' => "nullable|file",
          'skills' => ''
        ];
    }
}
