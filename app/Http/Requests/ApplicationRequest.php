<?php

namespace App\Http\Requests;

class ApplicationRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'comment' => 'required|string',
            'freelancer_id'  =>  'required|int',
            'order_id' => 'required|int',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'comment.required' => 'Comment required!',
            'freelancer_id.required' => 'Freelancer id required!',
            'order_id.required' => 'Order id required'
        ];
    }
}
