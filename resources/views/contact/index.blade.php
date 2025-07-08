@extends('layouts.app') {{-- Use the correct layout name, e.g., "layouts.app" --}}

@section('title', 'Contact Us')

@section('content')
<div class="contact-form-container" style="max-width: 600px; margin: 40px auto;">
    <h2>Contact Us</h2>

    {{-- Display Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Display Validation Errors --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul style="margin-bottom: 0;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Update action to use route --}}
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name">Name</label><br>
            <input type="text" name="name" value="{{ old('name') }}" required style="width:100%; padding:10px;">
        </div>
        <div class="mb-3">
    <label for="subject">Subject</label><br>
    <input type="text" name="subject" value="{{ old('subject') }}" required style="width:100%; padding:10px;">
</div>


        <div class="mb-3">
            <label for="email">Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required style="width:100%; padding:10px;">
        </div>

        <div class="mb-3">
            <label for="message">Message</label><br>
            <textarea name="message" rows="5" required style="width:100%; padding:10px;">{{ old('message') }}</textarea>
        </div>

        <button type="submit" style="margin-top:10px; padding:10px 20px;">Send</button>
    </form>
</div>
@endsection
