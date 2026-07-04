<!-- resources/views/cart/partials/item-card.blade.php -->
<div class="flex items-center bg-white bg-opacity-60 backdrop-blur-sm rounded-xl shadow-lg p-4 glass-effect hover:scale-105 transition-transform duration-200">
    <img src="{{ $item['product_image'] ?? 'https://via.placeholder.com/80' }}" alt="{{ $item['product_name'] }}" class="w-20 h-20 object-cover rounded-md mr-4">
    <div class="flex-1">
        <h2 class="text-lg font-semibold text-primary">{{ $item['product_name'] }}</h2>
        <p class="text-sm text-gray-500">{{ $item['package_name'] ?? '' }}</p>
        <p class="text-sm text-gray-700">Harga: {{ $item['price'] }}</p>
        <p class="text-sm text-gray-700">Subtotal: {{ $item['subtotal'] }}</p>
    </div>
    <form action="{{ route('cart.update') }}" method="POST" class="flex items-center space-x-2">
        @csrf
        @method('PATCH')
        <input type="hidden" name="product_price_id" value="{{ $item['product_price_id'] }}">
        <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="w-16 border rounded text-center"> 
        <button type="submit" class="bg-primary text-white rounded-full px-3 py-1 hover:bg-primary-dark transition-colors">Update</button>
    </form>
    <form action="{{ route('cart.remove') }}" method="POST" class="ml-2">
        @csrf
        @method('POST')
        <input type="hidden" name="product_price_id" value="{{ $item['product_price_id'] }}">
        <button type="submit" class="text-red-600 hover:text-red-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </form>
</div>
