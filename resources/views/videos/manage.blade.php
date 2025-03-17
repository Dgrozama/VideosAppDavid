<!-- resources/views/videos/manage.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Videos</title>

    <!-- Estils CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            padding: 40px;
            background-color: #fff;
            border-radius: 8px;
            max-width: 1000px;
            margin: 20px auto;
        }

        h1 {
            font-size: 28px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .video-list {
            list-style-type: none;
            padding: 0;
        }

        .video-item {
            background-color: #f9f9f9;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .video-item h3 {
            font-size: 20px;
            color: #333;
        }

        .video-item p {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .video-item .btn {
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
        }

        .video-item .btn:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Manage Videos</h1>

    <!-- Llista de vídeos -->
    <ul class="video-list">
        <li class="video-item">
            <h3>Video Title 1</h3>
            <p>Description of the video goes here...</p>
            <a href="#" class="btn">Edit</a>
            <a href="#" class="btn">Delete</a>
        </li>
        <li class="video-item">
            <h3>Video Title 2</h3>
            <p>Description of the video goes here...</p>
            <a href="#" class="btn">Edit</a>
            <a href="#" class="btn">Delete</a>
        </li>
        <!-- Més vídeos aquí -->
    </ul>
</div>

</body>
</html>
