<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailPostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'subject' => 'required|max:255',
            'message' => 'required|max:65535',
        ];
    }
}
