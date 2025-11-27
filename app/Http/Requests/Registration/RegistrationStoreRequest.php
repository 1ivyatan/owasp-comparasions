<?php

namespace App\Http\Requests\Registration;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use App\Enums\Registration\Priority;

class RegistrationStoreRequest extends FormRequest
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
            'phone' => [
                'required',
                'size:8'
            ],
            'email' => [
                'required',
                Rule::email()
                    ->rfcCompliant(strict: false)
            ],
            'title' => 'required',
            'message' => 'required',
            'priority' => [
                'required',
                Rule::in(Priority::values())
            ]
        ];
    }
}
