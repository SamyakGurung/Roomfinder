<!-- resources/views/listings/index.blade.php -->
@extends('layouts.app')

@section('title', 'All Listings')

@section('content')
    <h1>All Listings</h1>

    <a href="{{ route('listings.create') }}" class="btn btn-primary mb-3">Add New Listing</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($listings->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listings as $listing)
                <tr>
                    <td>{{ $listing->id }}</td>
                    <td>{{ $listing->title }}</td>
                    <td>{{ $listing->location }}</td>
                    <td>${{ $listing->price }}</td>
                    <td>
                        <a href="{{ route('listings.edit', $listing->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('listings.destroy', $listing->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this listing?');">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No listings found.</p>
    @endif
@endsection
