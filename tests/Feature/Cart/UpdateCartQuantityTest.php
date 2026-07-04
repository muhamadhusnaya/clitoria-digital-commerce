<?php

namespace Tests\Feature\Cart;

use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UpdateCartQuantityTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_update_quantity_of_item_in_cart()
    {
        $product = Product::create([
            'name' => 'Test Product',
            'slug' => 'test-product',
            'description' => 'Test description',
            'status' => 'active',
            'image' => 'test.jpg',
        ]);

        $price = ProductPrice::create([
            'product_id' => $product->id,
            'package_name' => 'Basic',
            'type' => ProductPrice::TYPE_SINGLE,
            'price' => 150000,
        ]);

        // Add item first
        $this->postJson(route('public.cart.add'), [
            'product_price_id' => $price->id,
            'quantity' => 2,
        ])->assertStatus(200);

        // Update quantity to 5
        $response = $this->putJson(route('public.cart.update'), [
            'product_price_id' => $price->id,
            'quantity' => 5,
        ]);

        $response->assertStatus(200)
                 ->assertJson([
                     'status' => 'success',
                     'message' => 'Item quantity updated.',
                     'cart_count' => 5,
                 ]);

        $this->assertEquals(5, session('cart')[(string) $price->id]['quantity']);
    }

    public function test_updating_quantity_to_zero_removes_item()
    {
        $product = Product::create([
            'name' => 'Test Product',
            'slug' => 'test-product',
            'description' => 'Test description',
            'status' => 'active',
            'image' => 'test.jpg',
        ]);

        $price = ProductPrice::create([
            'product_id' => $product->id,
            'package_name' => 'Basic',
            'type' => ProductPrice::TYPE_SINGLE,
            'price' => 150000,
        ]);

        // Add item first
        $this->postJson(route('public.cart.add'), [
            'product_price_id' => $price->id,
            'quantity' => 2,
        ])->assertStatus(200);

        // Set quantity to 0 (should remove)
        $response = $this->putJson(route('public.cart.update'), [
            'product_price_id' => $price->id,
            'quantity' => 0,
        ]);

        $response->assertStatus(200)
                 ->assertJson([
                     'status' => 'success',
                     'message' => 'Item removed from cart.',
                     'cart_count' => 0,
                 ]);

        $this->assertArrayNotHasKey((string) $price->id, session('cart') ?? []);
    }
}
