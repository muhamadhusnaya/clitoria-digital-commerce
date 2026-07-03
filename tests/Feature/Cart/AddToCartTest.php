<?php

namespace Tests\Feature\Cart;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;
use App\Models\ProductPrice;

class AddToCartTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_add_item_to_cart()
    {
        $product = Product::create([
            'name' => 'Test Product',
            'slug' => 'test-product',
            'description' => 'Test desc',
            'status' => 'active',
            'image' => 'test.jpg',
        ]);

        $price = ProductPrice::create([
            'product_id' => $product->id,
            'package_name' => 'Basic',
            'type' => ProductPrice::TYPE_SINGLE,
            'price' => 150000,
        ]);

        $response = $this->postJson(route('public.cart.add'), [
            'product_price_id' => $price->id,
            'quantity' => 2,
        ]);

        $response->assertStatus(200)
                 ->assertJson([
                     'status' => 'success',
                     'cart_count' => 2,
                 ]);

        $this->assertNotNull(session('cart'));
        $this->assertArrayHasKey((string) $price->id, session('cart'));
        $this->assertEquals(2, session('cart')[(string) $price->id]['quantity']);
    }

    public function test_fails_if_product_price_missing_or_invalid()
    {
        $response = $this->post(route('public.cart.add'), [
            'quantity' => 1,
            'product_price_id' => 99999,
        ]);

        $response->assertStatus(302)
                 ->assertSessionHasErrors('product_price_id');
    }
}
