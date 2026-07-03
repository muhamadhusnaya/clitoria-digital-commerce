<!-- resources/views/cart/index.blade.php -->
@extends('layouts.app')

@section('title', 'Keranjang & Checkout')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-primary">Keranjang Belanja</h1>

    @if($summary['total_items'] > 0)
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Items list -->
            <div class="lg:col-span-2 space-y-4">
                @foreach($summary['items'] as $item)
                    @include('cart.partials.item-card', ['item' => $item])
                @endforeach
            </div>

            <!-- Summary panel -->
            <div class="lg:col-span-1">
                @include('cart.partials.summary-panel', ['summary' => $summary])
            </div>
        </div>
    @else
        <p class="text-center text-gray-600">Keranjang Anda masih kosong.</p>
    @endif
</div>
@endsection
