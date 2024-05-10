<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechMasters - CRUD Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff; /* Change this to your preferred background color */
            color: #000; /* Change this to your preferred text color */
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #182E6C; /* Your base color */
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .logo {
            /* Add styling for your logo here */
        }
        .content {
            padding: 20px;
        }
        .crud-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .crud {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 10px;
        }
        .crud h2 {
            text-align: center;
        }
        .crud ul {
            list-style-type: none;
            padding: 0;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to TechMasters</h1>
        <!-- Add your demo logo here -->
        <div class="logo">
            <img src="{{ asset('images/11.png') }}" alt="">
        </div>
    </div>
    <div class="content">
        <h2>About Us</h2>
        <p>TechMasters is a company specializing in backend development projects, particularly focusing on CRUD operations (Create, Read, Update, Delete). We provide robust solutions to manage data efficiently and effectively.</p>
        <h2>Our Services</h2>
        <ul>
            <li>Backend Development</li>
            <li>Database Management</li>
            <li>API Integration</li>
            <li>CRUD Operations</li>
        </ul>
        <h2>Contact Us</h2>
        <p>If you're interested in our services, feel free to contact us at:</p>
        <p>Email: info@techmasters.com</p>
        <p>Phone: +1 (123) 456-7890</p>
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
</body>
</html>
