<?php

namespace Tests\Feature\Cart;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RemoveFromCartTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_remove_item_from_cart()
    {
        $product = \App\Models\Product::create([
            'name' => 'Test Product',
            'slug' => 'test-product',
            'description' => 'Test desc',
            'status' => 'active',
            'image' => 'test.jpg',
        ]);

        $price = \App\Models\ProductPrice::create([
            'product_id' => $product->id,
            'package_name' => 'Basic',
            'type' => \App\Models\ProductPrice::TYPE_SINGLE,
            'price' => 150000,
        ]);

        // Add item first
        $this->postJson(route('public.cart.add'), [
            'product_price_id' => $price->id,
            'quantity' => 2,
        ]);

        $this->assertArrayHasKey((string) $price->id, session('cart'));

        // Now remove it
        $response = $this->deleteJson(route('public.cart.remove'), [
            'product_price_id' => $price->id,
        ]);

        $response->assertStatus(200)
                 ->assertJson([
                     'status' => 'success',
                     'cart_count' => 0,
                 ]);

        $this->assertArrayNotHasKey((string) $price->id, session('cart') ?? []);
    }

    public function test_fails_if_product_price_missing_or_invalid_on_remove()
    {
        $response = $this->delete(route('public.cart.remove'), [
            // missing product_price_id
        ]);

        $response->assertStatus(302)
                 ->assertSessionHasErrors('product_price_id');
    }
}
