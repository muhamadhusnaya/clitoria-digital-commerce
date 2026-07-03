<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\RemoveFromCartRequest;
use App\Http\Requests\UpdateCartQuantityRequest;
use App\Services\CartService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CartController extends Controller
{
    protected CartService $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    /**
     * Display the cart and checkout page.
     */
    public function index(): View
    {
        $summary = $this->cartService->getSummary();
        return view('cart.index', ['summary' => $summary]);
    }

    /**
     * Add an item to the cart.
     */
    public function add(AddToCartRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $this->cartService->addItem($validated['product_price_id'], $validated['quantity'] ?? 1);
        return redirect()->route('cart.index');
    }

    /**
     * Remove an item from the cart.
     */
    public function remove(RemoveFromCartRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $this->cartService->removeItem($validated['product_price_id']);
        return redirect()->route('cart.index');
    }

    /**
     * Update quantity of a cart item.
     */
    public function updateQuantity(UpdateCartQuantityRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $this->cartService->updateQuantity($validated['product_price_id'], $validated['quantity']);
        return redirect()->route('cart.index');
    }
}
