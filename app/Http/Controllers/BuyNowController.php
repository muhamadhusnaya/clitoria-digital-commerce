<?php

namespace App\Http\Controllers;

use App\Http\Requests\BuyNowCheckoutRequest;
use App\Services\BuyNowCheckoutService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class BuyNowController extends Controller
{
    protected BuyNowCheckoutService $buyNowCheckoutService;

    public function __construct(BuyNowCheckoutService $buyNowCheckoutService)
    {
        $this->buyNowCheckoutService = $buyNowCheckoutService;
    }

    /**
     * Process Buy Now checkout.
     */
    public function store(BuyNowCheckoutRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $url = $this->buyNowCheckoutService->generateCheckoutUrl(
            $data['whatsapp_number'],
            $data['customer_name'] ?? null,
            $data['product_id'],
            $data['quantity'],
            $data['variant_id'] ?? null
        );
        return Redirect::away($url);
    }
}
