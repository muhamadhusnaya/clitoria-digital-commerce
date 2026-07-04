<?php

namespace App\Services;

use App\Contracts\ProductPriceRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use InvalidArgumentException;

class CartService extends BaseService
{
    private const CART_SESSION_KEY = 'cart';

    public function __construct(
        protected ProductPriceRepositoryInterface $productPriceRepository
    ) {
    }

    public function addItem(int $productPriceId, int $quantity = 1): array
    {
        if ($quantity < 1) {
            throw new InvalidArgumentException('Quantity must be at least 1.');
        }

        $productPrice = $this->productPriceRepository->find($productPriceId);
        $cart = $this->getRawCart();

        $key = (string) $productPriceId;

        if (isset($cart[$key])) {
            $cart[$key]['quantity'] += $quantity;
            $cart[$key]['subtotal'] = $this->calculateSubtotal(
                $cart[$key]['price'],
                $cart[$key]['quantity']
            );
        } else {
            $cart[$key] = [
                'product_price_id' => $productPrice->id,
                'product_id' => $productPrice->product_id,
                'product_name' => $productPrice->product?->name,
                'package_name' => $productPrice->package_name,
                'type' => $productPrice->type,
                'price' => (float) $productPrice->price,
                'quantity' => $quantity,
                'subtotal' => $this->calculateSubtotal($productPrice->price, $quantity),
            ];
        }

        Session::put(self::CART_SESSION_KEY, $cart);

        return $cart[$key];
    }

    public function updateQuantity(int $productPriceId, int $quantity): array
    {
        if ($quantity < 1) {
            throw new InvalidArgumentException('Quantity must be at least 1.');
        }

        $cart = $this->getRawCart();
        $key = (string) $productPriceId;

        if (! isset($cart[$key])) {
            throw new InvalidArgumentException('Item not found in cart.');
        }

        $cart[$key]['quantity'] = $quantity;
        $cart[$key]['subtotal'] = $this->calculateSubtotal(
            $cart[$key]['price'],
            $quantity
        );

        Session::put(self::CART_SESSION_KEY, $cart);

        return $cart[$key];
    }

    public function removeItem(int $productPriceId): void
    {
        $cart = $this->getRawCart();
        $key = (string) $productPriceId;

        unset($cart[$key]);

        Session::put(self::CART_SESSION_KEY, $cart);
    }

    public function clear(): void
    {
        Session::forget(self::CART_SESSION_KEY);
    }

    public function getItems(): Collection
    {
        return collect($this->getRawCart())->values();
    }

    public function getSummary(): array
    {
        $items = $this->getItems();

        return [
            'items' => $items,
            'total_items' => $items->sum('quantity'),
            'total_price' => $items->sum('subtotal'),
            'formatted_total_price' => $this->formatPrice($items->sum('subtotal')),
        ];
    }

    public function isEmpty(): bool
    {
        return $this->getItems()->isEmpty();
    }

    private function getRawCart(): array
    {
        return Session::get(self::CART_SESSION_KEY, []);
    }

    private function calculateSubtotal(int|float|string $price, int $quantity): float
    {
        return (float) $price * $quantity;
    }

    private function formatPrice(int|float|string $price): string
    {
        return 'Rp ' . number_format((float) $price, 0, ',', '.');
    }
}