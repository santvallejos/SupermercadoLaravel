<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
       if ($this->method() == 'PUT') {

            return [
                'email'             => 'required|between:3,64|email|unique:App\Models\User,email,'.$this->user->id,',id',
            ];
        }


            return [
                'email'             => 'required|between:3,64|email|unique:App\Models\User,email',
                'role'              => 'required|integer|not_in:0',

            ];
    }

    public function messages()
    {
        return [
            'role.required'             =>  'The :attribute is required',
            'role.not_in'               =>  'The :attribute is not null',
            'email.unique'              => 'The :attribute exist',
            'email.required'            => 'The :attribute is required',
        ];
    }

    public function attributes()
    {
        return [
            'email'                     => 'Email',
            'role'                 => 'Select User Account Type',
        ];
    }
}