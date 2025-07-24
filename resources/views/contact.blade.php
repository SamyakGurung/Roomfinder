@extends('layouts.app') {{-- Make sure this layout file exists --}}

@section('content')
<div class="contact-form-container" style="max-width: 600px; margin: 40px auto;">
    <h2>Contact Us</h2>
    
    @if(session('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST"> {{-- Change to actual route --}}
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="name">Name</label><br>
            <input type="text" name="name" required style="width:100%; padding:10px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="email">Email</label><br>
            <input type="email" name="email" required style="width:100%; padding:10px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="message">Message</label><br>
            <textarea name="message" rows="5" required style="width:100%; padding:10px;"></textarea>
        </div>
        <button type="submit" style="margin-top:10px; padding:10px 20px;">Send</button>
    </form>
</div>
@endsection
