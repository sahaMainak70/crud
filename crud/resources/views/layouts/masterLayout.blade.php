<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Website</title>
    <link rel="shortcut icon" href="{{ asset('images/11.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles')
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('images/10.png') }}" alt="">
        </div>
        <div class="menu-toggle">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                {{-- <li><a href="#"></a></li> --}}
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
                {{-- <li><a href="#">Delete</a></li> --}}
            </ul>
        </div>
    </div>
    <div class="crud-container">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
