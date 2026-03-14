<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|min:2|max:50', //1й способ записи проверки
            'email' => ['required', 'min:5', 'max:100', 'email'], //2й способ
            'subject' => ['required', 'min:5', 'max:100'],
            'message' => ['required', 'min:5', 'max:500'],
        ];
    }

    public function messages(): array
    {
        //если сработает rules то будет вывод ошибок
        return [
            'name.required' => 'Please enter your name',
            'email.required' => 'Please enter your email',
            'subject.required' => 'Please enter your subject',
            'message.required' => 'Please enter your message',
            'name.min' => 'Please enter your name with at least 2 characters',
            'name.max' => 'Please enter your name with maximum 50 characters',
            'email.min' => 'Please enter your email with at least 5 characters',
            'email.max' => 'Please enter your email with maximum 255 characters',
            'subject.min' => 'Please enter your subject with at least 2 characters',
            'subject.max' => 'Please enter your subject with maximum 50 characters',
            'message.min' => 'Please enter your message with at least 2 characters',
            'message.max' => 'Please enter your message with maximum 500 characters',
        ];
    }
}
