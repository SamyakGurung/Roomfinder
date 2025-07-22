
@section('content')
<div class="contact-form-container" style="max-width: 600px; margin: 40px auto;">
    <h2>Contact Us</h2>
    <form action="#" method="POST">
        @csrf
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" required style="width:100%; padding:10px;">
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" required style="width:100%; padding:10px;">
        </div>
        <div>
            <label for="message">Message</label><br>
            <textarea name="message" rows="5" required style="width:100%; padding:10px;"></textarea>
        </div>
        <button type="submit" style="margin-top:10px; padding:10px 20px;">Send</button>
    </form>
</div>
@endsection
