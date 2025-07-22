<!DOCTYPE html>
<html lang="en">

@include('layout.head')
<body>
    @include('layout.nav')
    <div class="main">
        @yield('content')

    </div>

    @include('layout.footer')
    


</body>
</htm>