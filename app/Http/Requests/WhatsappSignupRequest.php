<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WhatsappSignupRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'min:2', 'max:255'],
            'last_name' => ['nullable', 'min:2', 'max:255'],
            'email' => ['required', 'min:2', 'max:255'],
            'country' => ['nullable', 'min:2', 'max:255'],
            'timezone' => ['nullable', 'min:2', 'max:255'],
            'country_code' => ['nullable', 'min:2', 'max:255'],
            'phone' => ['required'],
            'partner_name' => ['nullable', 'min:2', 'max:255'],
            'partner_email' => ['nullable', 'min:2', 'max:255'],
        ];
    }

    public function signupData()
    {
        return $this->only(array_keys($this->rules()));
    }
}
