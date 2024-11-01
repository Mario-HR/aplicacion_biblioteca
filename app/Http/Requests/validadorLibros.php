<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorLibros extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'isbn'=>'required|min:13',
            'title'=>'required|max:150',
            'author'=>'required',
            'pages'=>'required|integer',
            'year'=>'required|integer|digits:4|min:1100|max:'.date('Y'),
            'publisher'=>'required',
            'publisher-email'=>'required|email:rfc,dns'
        ];
    }
}
