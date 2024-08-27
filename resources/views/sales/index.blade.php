@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Sales List') }}
    </h2>
    <a href="{{ route('sales.create') }}" class="product-list-button">Add New Sale</a>
@endsection

@section('content')
    <div class="container mx-auto px-4">
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)
                    <tr>
                        <td>{{ $sale->id }}</td>
                        <td>{{ $sale->product->name }}</td>
                        <td>{{ $sale->quantity }}</td>
                        <td>${{ $sale->price }}</td>
                        <td>
                            <a href="{{ route('sales.show', $sale->id) }}" class="text-blue-500">View</a>
                            <a href="{{ route('sales.edit', $sale->id) }}" class="text-yellow-500">Edit</a>
                            <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
            <button class="product-list-button" onclick="alert('Total des ventes: {{ number_format($totalSales, 2) }}')">
                Total Vente
            </button>
        </div>
@endsection
