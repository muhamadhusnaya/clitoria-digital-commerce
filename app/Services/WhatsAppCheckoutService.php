<?php

namespace App\Services;

use InvalidArgumentException;

class WhatsAppCheckoutService extends BaseService
{
    public function __construct(
        protected CartService $cartService
    ) {
    }

    public function generateMessage(?string $customerName = null): string
    {
        $summary = $this->cartService->getSummary();

        if ($summary['items']->isEmpty()) {
            throw new InvalidArgumentException('Cart is empty.');
        }

        $message = "Halo, saya ingin melakukan pemesanan:%0A%0A";

        if ($customerName) {
            $message .= "Nama: {$customerName}%0A%0A";
        }

        foreach ($summary['items'] as $index => $item) {
            $number = $index + 1;

            $message .= "{$number}. {$item['product_name']}%0A";
            $message .= "Paket: {$item['package_name']}%0A";
            $message .= "Tipe: {$item['type']}%0A";
            $message .= "Harga: " . $this->formatPrice($item['price']) . "%0A";
            $message .= "Qty: {$item['quantity']}%0A";
            $message .= "Subtotal: " . $this->formatPrice($item['subtotal']) . "%0A%0A";
        }

        $message .= "Total Item: {$summary['total_items']}%0A";
        $message .= "Total Harga: {$summary['formatted_total_price']}%0A%0A";
        $message .= "Mohon informasi untuk proses pemesanan selanjutnya.";

        return $message;
    }

    public function generateCheckoutUrl(string $whatsappNumber, ?string $customerName = null): string
    {
        $phoneNumber = $this->normalizePhoneNumber($whatsappNumber);
        $message = $this->generateMessage($customerName);

        return "https://wa.me/{$phoneNumber}?text={$message}";
    }

    private function normalizePhoneNumber(string $whatsappNumber): string
    {
        $number = preg_replace('/[^0-9]/', '', $whatsappNumber);

        if (str_starts_with($number, '0')) {
            return '62' . substr($number, 1);
        }

        return $number;
    }

    private function formatPrice(int|float|string $price): string
    {
        return 'Rp ' . number_format((float) $price, 0, ',', '.');
    }
}