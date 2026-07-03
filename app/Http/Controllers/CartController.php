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


namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\RemoveFromCartRequest;
use App\Http\Requests\UpdateCartQuantityRequest;
use App\Services\CartService;
use Illuminate\Http\JsonResponse;

class CartController extends Controller
{
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


namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\RemoveFromCartRequest;
use App\Http\Requests\UpdateCartQuantityRequest;
use App\Services\CartService;
use Illuminate\Http\JsonResponse;

class CartController extends Controller
{
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


namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\RemoveFromCartRequest;
use App\Http\Requests\UpdateCartQuantityRequest;
use App\Services\CartService;
use Illuminate\Http\JsonResponse;

class CartController extends Controller
{
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


namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\RemoveFromCartRequest;
use App\Http\Requests\UpdateCartQuantityRequest;
use App\Services\CartService;
use Illuminate\Http\JsonResponse;

class CartController extends Controller
{
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


namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\RemoveFromCartRequest;
use App\Http\Requests\UpdateCartQuantityRequest;
use App\Services\CartService;
use Illuminate\Http\JsonResponse;

class CartController extends Controller
{
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


namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\RemoveFromCartRequest;
use App\Http\Requests\UpdateCartQuantityRequest;
use App\Services\CartService;
use Illuminate\Http\JsonResponse;

class CartController extends Controller
{
    /**
use App\Http\Requests\UpdateCartQuantityRequest;
use App\Services\CartService;
use Illuminate\Http\JsonResponse;

class CartController extends Controller
{
    /**
     * Handle adding a product to the cart.
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
     * Handle removing an item from the cart.
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
     * Handle updating the quantity of an item in the cart.
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


namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\UpdateCartQuantityRequest;

    /**
     * Handle updating quantity of an item in the cart.
     */
    public function updateQuantity(UpdateCartQuantityRequest $request, CartService $cartService): JsonResponse
    {
        $validated = $request->validated();
        $quantity = (int) $validated['quantity'];
        if ($quantity === 0) {
            // Treat zero as removal
            $cartService->removeItem((int) $validated['product_price_id']);
            $item = null;
        } else {
            $item = $cartService->updateQuantity((int) $validated['product_price_id'], $quantity);
        }

        return response()->json([
            'status' => 'success',
            'message' => $quantity === 0 ? 'Item removed from cart.' : 'Item quantity updated.',
            'item' => $item,
            'cart_count' => $cartService->getItems()->sum('quantity'),
        ]);
    }use App\Services\CartService;
use Illuminate\Http\JsonResponse;

class CartController extends Controller
{
    /**
     * Handle adding a product to the cart.
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
     * Handle removing an item from the cart.
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
    /**
     * Handle updating quantity of an item in the cart.
     */
    public function updateQuantity(\App\Http\Requests\UpdateCartQuantityRequest $request, CartService $cartService): JsonResponse
    {
        $validated = $request->validated();
        $item = $cartService->updateQuantity((int) $validated['product_price_id'], (int) $validated['quantity']);

        return response()->json([
            'status' => 'success',
            'message' => 'Item quantity updated.',
            'item' => $item,
            'cart_count' => $cartService->getItems()->sum('quantity'),
        ]);
    }

