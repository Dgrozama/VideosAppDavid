<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos App</title>
</head>
<body>
<header>

    <nav>
        <ul>
            <li><a href="{{ route('videos.index') }}">Home</a></li>
            <li><a href="{{ route('videos.create') }}">Upload Video</a></li>
        </ul>
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
