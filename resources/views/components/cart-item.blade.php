@props(['item'])

<div class="flex items-center justify-between p-4 bg-surface-container-lowest rounded-md soft-shadow mb-4" x-data="{
    removing: false,
    removeFromCart() {
        if(confirm('Are you sure you want to remove this item?')) {
            this.removing = true;
            fetch('/cart/remove', {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]')?.content || '',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ product_price_id: this.item.product_price_id })
            })
            .then(res => res.json())
            .then(data => {
                if(data.status === 'success') {
                    if (typeof Alpine !== 'undefined' && Alpine.store('cart')) {
                        Alpine.store('cart').count = data.cart_count;
                    }
                    // Remove element from DOM
                    $el.remove();
                } else {
                    this.removing = false;
                }
            })
            .catch(err => {
                this.removing = false;
                console.error(err);
            });
        }
    }
}">
    <div class="flex items-center gap-4">
        <!-- Thumbnail placeholder -->
        <div class="w-16 h-16 bg-surface-container rounded-sm flex items-center justify-center text-on-surface-variant overflow-hidden">
            @if(isset($item['image']))
                <img src="{{ $item['image'] }}" alt="{{ $item['name'] ?? 'Product' }}" class="w-full h-full object-cover">
            @else
                <span class="material-symbols-outlined text-2xl">image</span>
            @endif
        </div>
        
        <div>
            <h4 class="text-label-md text-on-surface">{{ $item['name'] ?? 'Product Name' }}</h4>
            <p class="text-body-md text-on-surface-variant">Rp {{ number_format($item['price'] ?? 0, 0, ',', '.') }}</p>
            <p class="text-body-md text-on-surface-variant mt-1">Qty: {{ $item['quantity'] ?? 1 }}</p>
            <div x-data="{ qty: {{ $item['quantity'] ?? 1 }}, updating: false, update() { this.updating = true; fetch('/cart/update', { method: 'PUT', headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]')?.content || '', 'Content-Type': 'application/json', 'Accept': 'application/json' }, body: JSON.stringify({ product_price_id: {{ $item['product_price_id'] }}, quantity: this.qty }) }).then(res => res.json()).then(data => { if (data.status === 'success') { if (typeof Alpine !== 'undefined' && Alpine.store('cart')) { Alpine.store('cart').count = data.cart_count; } } this.updating = false; }).catch(err => { console.error(err); this.updating = false; }); } }" class="flex items-center gap-2 mt-1">
                <button @click="if (qty > 1) { qty--; update(); }" class="p-1 text-on-surface-variant hover:text-primary rounded">-</button>
                <input type="number" min="0" :value="qty" @change="qty = $event.target.value; update();" class="w-12 text-center border border-outline-variant rounded" />
                <button @click="qty++; update();" class="p-1 text-on-surface-variant hover:text-primary rounded">+</button>
            </div>
        </div>
    </div>

    <div>
        <button 
            @click="removeFromCart" 
            :disabled="removing"
            class="p-2 text-error hover:bg-error-container rounded-full transition-colors flex items-center justify-center disabled:opacity-50"
            title="Remove Item"
        >
            <span class="material-symbols-outlined" data-icon="delete">delete</span>
        </button>
    </div>
</div>
