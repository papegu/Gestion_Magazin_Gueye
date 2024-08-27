@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Create Sale') }}
    </h2>
@endsection

@section('content')
    <div class="container mx-auto px-4">
        <form action="{{ route('sales.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="product_id" class="block text-gray-700">Product</label>
                <select name="product_id" id="product_id" class="form-select mt-1 block w-full">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="quantity" class="block text-gray-700">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price</label>
                <input type="number" step="0.01" name="price" id="price" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <button type="submit" class="product-list-button">Save</button>
            </div>
        </form>
    </div>
@endsection
