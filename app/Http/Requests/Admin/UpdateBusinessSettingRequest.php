<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBusinessSettingRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'whatsapp_number' => ['nullable', 'string', 'max:20'],
            'business_email' => ['nullable', 'email', 'max:255'],
            'instagram_url' => ['nullable', 'url', 'max:255'],
            'address' => ['nullable', 'string'],
            'google_maps_embed' => ['nullable', 'string'],
        ];
    }
}
