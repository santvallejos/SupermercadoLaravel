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
                'nombre'            => 'required|between:1,255',
                'apellido'         => 'required|between:1,255',
                'email'             => 'required|between:3,64|email|unique:App\Models\User,email,'.$this->user->id,',id',
            ];
        }


            return [
                'nombre'            => 'required|between:1,100',
                'email'             => 'required|between:3,64|email|unique:App\Models\User,email',
                'apellido'          => 'required|between:1,255',
                'role'              => 'required|integer|not_in:0',
            ];
    }

    public function messages()
    {
        return [
            'nombre.required'           =>  'The :attribute is required',
            'nombre.between'            =>  'The :attribute is required',
            'apellido.required'         =>  'The :attribute is required',
            'apellido.between'          =>  'The :attribute is required',
            'role.required'             =>  'The :attribute is required',
            'role.not_in'               =>  'The :attribute is not null',
            'email.unique'              =>  'The :attribute exist',
            'email.required'            =>  'The :attribute is required',
        ];
    }

    public function attributes()
    {
        return [
            'nombre'                   => 'Nombre',
            'email'                    => 'Email',
            'apellido'                 => 'Apellido',
            'role'                     => 'Select User Account Type',
        ];
    }
}
