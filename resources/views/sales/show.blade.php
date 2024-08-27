@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Sale Details') }}
    </h2>
@endsection

@section('content')
    <div class="container mx-auto px-4">
        <div class="bg-white shadow-md rounded p-6">
            <h3 class="text-lg font-semibold">Sale ID: {{ $sale->id }}</h3>
            <p><strong>Product:</strong> {{ $sale->product->name }}</p>
            <p><strong>Quantity:</strong> {{ $sale->quantity }}</p>
            <p><strong>Price:</strong> ${{ $sale->price }}</p>
            <p><strong>Total:</strong> ${{ $sale->quantity * $sale->price }}</p>
        </div>
    </div>
@endsection
