<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBenefitRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'icon_type' => ['required', 'in:material,image'],
            'icon' => ['nullable', 'string', 'max:50'],
            'icon_file' => ['nullable', 'image', 'mimes:jpeg,png,jpg,svg,webp', 'max:10240'],
            'status' => ['required', 'in:1,0'],
        ];
    }
}
