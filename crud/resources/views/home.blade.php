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
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('images/10.png') }}" alt="">
        </div>
    </div>
    <div class="crud-container">
        <div class="crud">
            <h2>Create</h2>
            <p>Create new records in the database.</p>
        </div>
        <div class="crud">
            <h2>Read</h2>
            <p>Retrieve and view existing records from the database.</p>
        </div>
        <div class="crud">
            <h2>Update</h2>
            <p>Update existing records in the database.</p>
        </div>
        <div class="crud">
            <h2>Delete</h2>
            <p>Delete records from the database.</p>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
