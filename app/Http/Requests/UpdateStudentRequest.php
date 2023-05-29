<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
{
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
            'first_name_ar' => 'required|string|max:255',
            'first_name_fr' => 'required|string|max:255',
            'last_name_ar' => 'required|string|max:255',
            'last_name_fr' => 'required|string|max:255',
            'cin'=>'required|string|max:8',
            'email'=>'required|email',
            'img'=>'required|image',
            'telephone1'=>'required|string|max:13',
            'telephone2'=>'required|string|max:13',

        ];
    }
}
