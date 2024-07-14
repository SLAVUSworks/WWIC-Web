<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'nickname'                  => 'nullable|min:3',
            'full_name'                 => 'nullable',
            'email'                     => 'required|email',
            'password'                  => 'nullable|min:8|confirmed',
            'password_confirmation'     => 'nullable|min:8|required_with:password',
            'avatar'                    => 'nullable|image|max:512' // Removed 'file' and 'mimes' rules
        ];
    }
}
