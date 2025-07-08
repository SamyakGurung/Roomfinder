<header>
    <div class="navbar">
      <div class="logo">🏠 Room Finder</div>
      
      
      <nav>
        <ul>
          <li><a href="{{route('index')}}">Home</a></li>
          <li><a href="{{route('aboutus')}}">About</a></li>
          <li><a href="{{route('listings')}}">Listings</a></li>
          <li><a href="{{route('contact')}}">contact</a></li>
        </ul>
      </nav>
      <div class="auth-buttons">
        <a href="{{route('login')}}" style="background-color:white;padding:8px;border-radius:20%;">login</a>
        <a href="{{route('register')}}" target="_blank" style="background-color:white;padding:8px;border-radius:20%;">Sign Up</a>
       
      </div>
    </div>
  </header>