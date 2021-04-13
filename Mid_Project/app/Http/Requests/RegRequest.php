<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegRequest extends FormRequest
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
            // 'UserId'                => 'required',
            'Email'                 => 'required',
            'Name'                  => 'required',
            'Gender'                => 'required',
            'Type'                  => 'required',
            'PhoneNo'               => 'required',
            // 'Status'                => 'required',
            'DOB'                   => 'required',
            'Password'              => 'required',
            'password_confirmation' => 'required|same:Password'
        ];
    }
}
