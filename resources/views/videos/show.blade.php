<x-layouts.videos-app>
    <h1>Video Details</h1>
    <div class="row">
        <div class="col-md-8">
            <video width="100%" controls>
                <source src="{{ asset('storage/' . $video->url) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-md-4">
            <h2>{{ $video->title }}</h2>
            <p>{{ $video->description }}</p>
            <p>URL: {{ $video->url }}</p>
            <p>Published at: {{ $video->published_at ? $video->published_at->format('d M Y') : 'Not published' }}</p>
            <p>Previous Video ID: {{ $video->previous ? $video->previous : 'None' }}</p>
            <p>Next Video ID: {{ $video->next ? $video->next : 'None' }}</p>
            <p>Series ID: {{ $video->series_id ? $video->series_id : 'None' }}</p>
        </div>
    </div>
</x-layouts.videos-app>
