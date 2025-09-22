<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'login' => 'required|string|min:4|max:60',
            'email' => 'required|string|email:rfc,dns|unique:users,email',
            'password' => 'required|string|min:4|max:255|current_password',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Поле email обязательно к заполнению',
            'email.unique' => 'Пользователь с таким email уже существует в системе',
        ];
    }
}
