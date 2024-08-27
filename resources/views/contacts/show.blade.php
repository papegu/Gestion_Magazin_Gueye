@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Contact Details') }}
    </h2>
@endsection

@section('content')
    <div class="container mx-auto px-4">
        <div class="bg-white shadow-md rounded p-6">
            <h3 class="text-lg font-semibold">Contact ID: {{ $contact->id }}</h3>
            <p><strong>Name:</strong> {{ $contact->name }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Phone:</strong> {{ $contact->phone }}</p>
            <p><strong>Address:</strong> {{ $contact->address }}</p>
        </div>
    </div>
@endsection
