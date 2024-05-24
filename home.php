<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIMS</title>
    <style>
        body {
            background-color: #F0E5CF;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
            background: #FFFFFF;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            color: #2C3E50;
            font-size: 36px;
            margin-bottom: 20px;
        }
        p {
            color: #34495E;
            font-size: 18px;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        li a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498DB;
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        li a:hover {
            background-color: #2980B9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Academic Information Management System</h1>
        <p>Please select an option:</p>
        <ul>
            <li><a href="input_form.php">Input New Record</a></li>
            <li><a href="delete.php">Delete Record</a></li>
        </ul>
    </div>
</body>
</html>
