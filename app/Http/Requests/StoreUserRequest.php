<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    protected $stopOnFirstFailure = false;
//    protected $redirect = '/';

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'bail|required|string|max:255|regex:/^[^0-9]*$/',
            'email' => 'bail|required|email|max:255|unique:users',
            'password' => 'bail|required|min:8|max:200|confirmed'
        ];
    }

    public function messages() : array
    {
        return [
            'name.regex' => 'The :attribute field must not contain any numeric characters.'
        ];
    }
}
