<x-videos-app-layout>
    <div class="video-container">
        <h1 class="video-title">{{ $video['title'] }}</h1>
        <p class="video-description">{{ $video['description'] }}</p>

        <div class="video-frame">
            <iframe
                src="{{ $video['url'] }}?autoplay=0"
                width="100%"
                height="500"
                frameborder="0"
                allowfullscreen>
            </iframe>
        </div>

        <a href="{{ $video['url'] }}" target="_blank" class="video-link">Mira el vídeo en una nova finestra</a>

        <ul class="video-info">
            <li><strong>Data de publicació:</strong> {{ $video['published_at'] }}</li>
            <li><strong>Anterior vídeo:</strong> {{ $video['previous'] }}</li>
            <li><strong>Següent vídeo:</strong> {{ $video['next'] }}</li>
            <li><strong>ID de la sèrie:</strong> {{ $video['series_id'] }}</li>
        </ul>
    </div>
</x-videos-app-layout>

<style>
    .video-container {
        max-width: 900px;
        margin: 30px auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .video-title {
        font-size: 26px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #333;
    }

    .video-description {
        font-size: 16px;
        margin-bottom: 20px;
        color: #666;
    }

    .video-frame {
        margin-bottom: 20px;
        text-align: center;
    }

    .video-link {
        display: inline-block;
        padding: 10px 20px;
        background-color: #cc0000;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        font-size: 14px;
        margin-bottom: 20px;
        transition: background-color 0.2s ease;
    }

    .video-link:hover {
        background-color: #990000;
    }

    .video-info {
        list-style-type: none;
        padding: 0;
        margin: 0;
        color: #555;
    }

    .video-info li {
        font-size: 14px;
        margin-bottom: 8px;
    }

    .video-info li strong {
        font-weight: 600;
    }
</style>
