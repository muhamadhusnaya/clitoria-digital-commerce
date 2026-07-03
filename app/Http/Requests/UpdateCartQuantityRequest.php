<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCartQuantityRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'product_price_id' => ['required', 'integer', 'exists:product_prices,id'],
            'quantity' => ['required', 'integer', 'min:1'],
        ];
    }
}
