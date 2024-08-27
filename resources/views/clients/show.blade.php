@extends('layouts.app')

@section('content')
    <h1>Client Details</h1>
    
    <p><strong>Name:</strong> {{ $client->name }}</p>
    <p><strong>Email:</strong> {{ $client->email }}</p>
    <p><strong>Phone:</strong> {{ $client->phone }}</p>
    <p><strong>Address:</strong> {{ $client->address }}</p>
    
    <a href="{{ route('clients.index') }}">Back to Clients List</a>
    <a href="{{ route('clients.edit', $client->id) }}">Edit Client</a>
@endsection
