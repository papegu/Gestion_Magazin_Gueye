@extends('layouts.app')

@section('content')
    <h1>Create New Client</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
        
        <label for="address">Address:</label>
        <textarea name="address" id="address">{{ old('address') }}</textarea>
        
        <button type="submit">Create Client</button>
    </form>
@endsection
