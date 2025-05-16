<!DOCTYPE html>
<html>
<head>
    <title>New Video Created</title>
</head>
<body>
<h1>New Video Created: {{ $videoTitle }}</h1>
<p><strong>Description:</strong> {{ $videoDescription }}</p>
<p><strong>URL:</strong> <a href="{{ $videoUrl }}">{{ $videoUrl }}</a></p>
<p><strong>Created At:</strong> {{ $createdAt }}</p>
</body>
</html>
