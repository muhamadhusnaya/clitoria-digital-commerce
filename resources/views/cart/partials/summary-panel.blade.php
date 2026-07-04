<?php

/* resources/views/cart/partials/summary-panel.blade.php */
?>
<div class="bg-white bg-opacity-60 backdrop-blur-sm rounded-xl shadow-lg p-6 glass-effect">
    <h2 class="text-2xl font-bold mb-4 text-primary">Ringkasan Belanja</h2>
    <p class="text-lg mb-2"><span class="font-semibold">Total Item:</span> {{ $summary['total_items'] }}</p>
    <p class="text-lg mb-2"><span class="font-semibold">Total Harga:</span> {{ $summary['formatted_total_price'] }}</p>
    <a href="{{ route('checkout.index') }}" class="block w-full text-center bg-primary text-white rounded-md py-2 mt-4 hover:bg-primary-dark transition-colors">
        Lanjut ke Checkout
    </a>
</div>
