<?php

namespace App\Http\Requests\FbReporting\FbPagePostScheduler;

use Illuminate\Foundation\Http\FormRequest;

class DeletePostSchedulerRequest extends FormRequest
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
            'id' => ['nullable', 'exists:fb_page_post_schedulers']
        ];
    }
 
}