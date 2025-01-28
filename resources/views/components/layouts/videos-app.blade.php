<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header, footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }
        nav {
            margin: 0;
            padding: 0;
        }
        h1 {
            margin: 0;
        }
        main {
            padding: 1em;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
        }
        .col-md-8, .col-md-4 {
            padding: 1em;
        }
        .col-md-8 {
            flex: 2;
        }
        .col-md-4 {
            flex: 1;
        }
        .badge-primary {
            background-color: #007bff;
            color: #fff;
            padding: 0.2em 0.6em;
            border-radius: 0.2em;
        }
    </style>
</head>
<body>
<header>
    <nav>
    </nav>
    <h1>Videos App</h1>
    <hr>
</header>
<main>
    {{ $slot }}
</main>
<footer>
    <hr>
    <p>&copy; 2025 Videos App</p>
</footer>
</body>
</html>
