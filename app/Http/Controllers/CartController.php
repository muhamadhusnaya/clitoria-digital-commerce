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
    public function index()
    {
        return view('public.cart.index');
    }

    /**
     * Add a product to the cart.
     */
    public function add(AddToCartRequest $request, CartService $cartService): JsonResponse
    {
        $validated = $request->validated();
        $item = $cartService->addItem(
            (int) $validated['product_price_id'],
            (int) ($validated['quantity'] ?? 1)
        );
        return response()->json([
            'status' => 'success',
            'message' => 'Item added to cart.',
            'item' => $item,
            'cart_count' => $cartService->getItems()->sum('quantity'),
        ]);
    }

    /**
     * Remove an item from the cart.
     */
    public function remove(RemoveFromCartRequest $request, CartService $cartService): JsonResponse
    {
        $validated = $request->validated();
        $cartService->removeItem((int) $validated['product_price_id']);
        return response()->json([
            'status' => 'success',
            'message' => 'Item removed from cart.',
            'cart_count' => $cartService->getItems()->sum('quantity'),
        ]);
    }

    /**
     * Update the quantity of an item in the cart.
     * If quantity is 0, the item is removed.
     */
    public function updateQuantity(UpdateCartQuantityRequest $request, CartService $cartService): JsonResponse
    {
        $validated = $request->validated();
        $quantity = (int) $validated['quantity'];
        if ($quantity === 0) {
            $cartService->removeItem((int) $validated['product_price_id']);
            $item = null;
            $message = 'Item removed from cart.';
        } else {
            $item = $cartService->updateQuantity((int) $validated['product_price_id'], $quantity);
            $message = 'Item quantity updated.';
        }
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'item' => $item,
            'cart_count' => $cartService->getItems()->sum('quantity'),
        ]);
    }
}
