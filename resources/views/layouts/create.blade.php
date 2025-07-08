<!-- resources/views/listings/create.blade.php -->
@extends('layouts.app')

@section('title', 'Add Listing')

@section('content')
    <h1>Add New Listing</h1>

    <form action="{{ route('listings.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ old('location') }}" required>
            @error('location')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price ($)</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-success" type="submit">Save Listing</button>
        <a href="{{ route('listings.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
