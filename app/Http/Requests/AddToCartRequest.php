<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddToCartRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // middleware ensures auth
    }

    public function rules(): array
    {
        return [
            'product_price_id' => ['required', 'integer', 'exists:product_prices,id'],
            'quantity' => ['sometimes', 'integer', 'min:1'],
        ];
    }
}
