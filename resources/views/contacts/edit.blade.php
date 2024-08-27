@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Edit Contact') }}
    </h2>
@endsection

@section('content')
    <div class="container mx-auto px-4">
        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="form-input mt-1 block w-full" value="{{ $contact->name }}" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="form-input mt-1 block w-full" value="{{ $contact->email }}" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-700">Phone</label>
                <input type="text" name="phone" id="phone" class="form-input mt-1 block w-full" value="{{ $contact->phone }}">
            </div>

            <div class="mb-4">
                <label for="address" class="block text-gray-700">Address</label>
                <textarea name="address" id="address" class="form-textarea mt-1 block w-full">{{ $contact->address }}</textarea>
            </div>

            <div class="mb-4">
                <button type="submit" class="product-list-button">Update</button>
            </div>
        </form>
    </div>
@endsection
