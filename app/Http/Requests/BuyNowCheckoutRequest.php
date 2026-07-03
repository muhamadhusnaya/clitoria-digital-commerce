<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuyNowCheckoutRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Allow both guests and authenticated users (adjust later if needed)
        return true;
    }

    public function rules(): array
    {
        return [
            'whatsapp_number' => ['required', 'string'],
            'customer_name'   => ['nullable', 'string'],
            'product_price_id'=> ['required', 'integer', 'exists:product_prices,id'],
            'quantity'        => ['required', 'integer', 'min:1'],
        ];
    }
}
