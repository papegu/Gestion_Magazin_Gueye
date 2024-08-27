<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('SENEGUEYE GROUP') }}
    </h2>
@endsection

@section('content')
    <div class="container mx-auto px-4">
        <a href="{{ route('products.index') }}" class="product-list-button">Go to Products List</a>
        <a href="{{ route('clients.index') }}" class="product-list-button">Go to Clients List</a>
        <a href="{{ route('sales.index') }}" class="product-list-button">Go to Sales List</a>
        <a href="{{ route('contacts.index') }}" class="product-list-button">Go to Contacts List</a>
    </div>
@endsection

