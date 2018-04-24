<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogInRequest extends FormRequest
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
    //TODO - check whether or not the password event is ok in this context
    public function rules()
    {
        return [
            'username'      =>  'required',
            'password'      =>  'required|min:6'
        ];
    }
}