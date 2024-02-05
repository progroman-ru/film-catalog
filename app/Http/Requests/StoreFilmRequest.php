<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFilmRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:200',
            'duration' => 'required|digits_between:1,5',
            'year' => 'required|integer|min:1895|max:' . date('Y'),
            'genre' => 'required|string|min:5|max:100',
            'director' => 'required|string|min:2|max:150',
        ];
    }
}
