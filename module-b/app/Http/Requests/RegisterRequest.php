<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'restaurantName' => 'required|string|min:4|max:128',
            'cuisine' => 'required|string|min:4|max:128',
            'location' => 'required|string|min:4|max:128',
            'logo' => 'sometimes|image|mimes:png,jpg,jpeg',

            'name' => 'required|string|min:4|max:128',
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ];
    }
}
