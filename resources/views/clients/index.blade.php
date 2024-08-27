@extends('layouts.app')
@section('header')
    Liste des Clients
@endsection
@section('content')
@php
        $header = 'Clients List';
    @endphp
    <h1>Clients</h1>
    <a href="{{ route('clients.create') }}">Add New Client</a>
    
    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif
    
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->address }}</td>
                    <td>
                        <a href="{{ route('clients.show', $client->id) }}">View</a>
                        <a href="{{ route('clients.edit', $client->id) }}">Edit</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
