<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\RemoveFromCartRequest;
use App\Http\Requests\UpdateCartQuantityRequest;
use App\Services\CartService;
use Illuminate\Http\JsonResponse;

class CartController extends Controller
{
    /**
     * View for Cart Page.
     */
    public function index(CartService $cartService)
    {
        $summary = $cartService->getSummary();
        return view('public.cart.index', compact('summary'));
    }

    /**
     * Add a product to the cart.
     */
    public function add(AddToCartRequest $request, CartService $cartService)
    {
        $validated = $request->validated();
        $cartService->addItem(
            (int) $validated['product_price_id'],
            (int) ($validated['quantity'] ?? 1)
        );
        return redirect()->route('public.cart.index')->with('success', 'Item added to cart.');
    }

    /**
     * Remove an item from the cart.
     */
    public function remove(RemoveFromCartRequest $request, CartService $cartService)
    {
        $validated = $request->validated();
        $cartService->removeItem((int) $validated['product_price_id']);
        return redirect()->route('public.cart.index')->with('success', 'Item removed from cart.');
    }

    /**
     * Update the quantity of an item in the cart.
     * If quantity is 0, the item is removed.
     */
    public function updateQuantity(UpdateCartQuantityRequest $request, CartService $cartService)
    {
        $validated = $request->validated();
        $quantity = (int) $validated['quantity'];
        if ($quantity === 0) {
            $cartService->removeItem((int) $validated['product_price_id']);
            $message = 'Item removed from cart.';
        } else {
            $cartService->updateQuantity((int) $validated['product_price_id'], $quantity);
            $message = 'Item quantity updated.';
        }
        return redirect()->route('public.cart.index')->with('success', $message);
    }
}
