@props(['product', 'priceId', 'price'])

<div class="rounded-md bg-surface-container-lowest soft-shadow hover:shadow-xl transition-all duration-300 hover:scale-[1.02] p-4 flex flex-col" x-data="{
    adding: false,
    addToCart() {
        this.adding = true;
        fetch('/cart/add', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]')?.content || '',
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({ product_price_id: this.priceId, quantity: 1 })
        })
        .then(res => res.json())
        .then(data => {
            this.adding = false;
            if(data.status === 'success') {
                if (typeof Alpine !== 'undefined' && Alpine.store('cart')) {
                    Alpine.store('cart').count = data.cart_count;
                }
            }
        })
        .catch(err => {
            this.adding = false;
            console.error(err);
        });
    }
}">
    <!-- Product Image Placeholder -->
    <div class="w-full h-48 bg-surface-container rounded-md mb-4 flex items-center justify-center text-on-surface-variant overflow-hidden">
        @if(isset($product->image))
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
        @else
            <span class="material-symbols-outlined text-4xl">image</span>
        @endif
    </div>
    
    <h3 class="text-headline-sm text-on-surface">{{ $product->name ?? 'Product Name' }}</h3>
    <p class="text-body-md text-on-surface-variant mb-4 flex-grow">{{ $price ?? 'Rp 0' }}</p>

    <button 
        @click="addToCart" 
        :disabled="adding"
        class="w-full bg-primary hover:bg-primary-container text-white py-3 rounded-full transition-colors disabled:opacity-50 text-label-md flex items-center justify-center gap-2"
    >
        <span class="material-symbols-outlined" data-icon="shopping_bag" style="font-size: 18px;">shopping_bag</span>
        <span x-text="adding ? 'Adding...' : 'Add to Bag'">Add to Bag</span>
    </button>
</div>
