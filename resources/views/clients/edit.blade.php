@extends('layouts.app')

@section('content')
    <h1>Edit Client</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $client->name) }}" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email', $client->email) }}" required>
        
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" value="{{ old('phone', $client->phone) }}">
        
        <label for="address">Address:</label>
        <textarea name="address" id="address">{{ old('address', $client->address) }}"></textarea>
        
        <button type="submit">Update Client</button>
    </form>
@endsection
