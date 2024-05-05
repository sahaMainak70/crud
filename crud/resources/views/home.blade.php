<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Website</title>
    <link rel="shortcut icon" href="{{ asset('images/9.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('images/11.png') }}" alt="Logo"></a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Create</a></li>
                <li><a href="#">Read</a></li>
                <li><a href="#">Update</a></li>
                <li><a href="#">Delete</a></li>
            </ul>
        </div>
    </div>
    
    <div class="container">
        <div class="name">
            <img src="{{ asset('images/10.png') }}" alt="name">
        </div>
    </div>
</body>

</html>
