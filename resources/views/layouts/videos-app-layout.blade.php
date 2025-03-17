<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Videos App' }}</title>
    <style>
        /* Header Styles */
        .app-header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .app-header-title {
            font-size: 26px;
            font-weight: 700;
            margin: 0;
            letter-spacing: 1px;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #444;
            padding: 12px 0;
        }

        .navbar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .navbar-nav li {
            display: inline;
            margin: 0 20px;
        }

        .navbar-nav a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .navbar-nav a:hover {
            color: #ff0000; /* Canviar a color més destacat */
            text-decoration: underline;
        }

        /* Main Content Styles */
        main {
            padding: 20px;
        }

        /* Footer Styles */
        .app-footer {
            background-color: #f8f9fa;
            color: #555;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #ddd;
            margin-top: 30px;
        }

        .app-footer-text {
            font-size: 14px;
            margin: 0;
            color: #666;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .navbar-nav li {
                display: block;
                margin: 10px 0;
            }

            .app-header-title {
                font-size: 22px;
            }
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body>
<header class="app-header">
    <h1 class="app-header-title">Videos App</h1>
</header>

<!-- Navbar -->
<nav class="navbar">
    <ul class="navbar-nav">
        <li><a href="{{ route('videos.manage.index') }}">Gestió de Vídeos</a></li>
        <li><a href="{{ route('videos.index') }}">Inici</a></li>
    </ul>
</nav>

<main>
    {{ $slot }}
</main>

<footer class="app-footer">
    <p class="app-footer-text">&copy; {{ date('Y') }} Videos App - David Groza</p>
</footer>
</body>
</html>
