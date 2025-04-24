<x-videos-app-layout>
    <div class="container">
        <!-- Title -->
        <h1 class="mb-4 text-center" style="font-size: 28px; font-weight: bold; color: #333;">{{ $serie->title }}</h1>

        <!-- Description -->
        <div class="mb-5 text-center">
            <p style="font-size: 18px; color: #555; line-height: 1.6;">{{ $serie->description }}</p>
        </div>

        <!-- Details -->
        <div class="d-flex justify-content-center gap-4 mb-5 text-muted" style="font-size: 14px;">
            <div>
                <strong>Published on:</strong>
                {{ $serie->published_at ? \Carbon\Carbon::parse($serie->published_at)->format('d/m/Y') : 'Not specified' }}
            </div>
            @if($serie->user_name)
                <div class="d-flex align-items-center gap-2">
                    @if($serie->user_photo_url)
                        <img src="{{ $serie->user_photo_url }}" alt="User"
                             class="rounded-circle" width="32" height="32" style="object-fit: cover;">
                    @endif
                    <span><strong>Created by:</strong> {{ $serie->user_name }}</span>
                </div>
            @endif
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success mt-3 text-center">{{ session('success') }}</div>
        @endif

        <!-- Associated Videos -->
        <h3 class="mb-4" style="font-size: 22px; font-weight: bold; color: #333;">Associated Videos</h3>

        @if($videos->isEmpty())
            <p class="text-muted">No videos are associated with this series.</p>
        @else
            <div class="row">
                @foreach($videos as $video)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card border-0 shadow-sm rounded h-100"
                             onclick="window.location='{{ route('videos.show', $video->id) }}'">

                            <iframe class="card-img-top" width="100%" height="180"
                                    src="{{ $video->url }}?autoplay=0"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen
                                    style="pointer-events: none; border-radius: 10px 10px 0 0;"></iframe>

                            <div class="card-body d-flex flex-column p-3">
                                <h5 class="card-title text-truncate mb-2" style="font-size: 16px; font-weight: 600; color: #333;">{{ $video->title }}</h5>
                                <p class="card-text text-truncate mb-3" style="font-size: 14px; color: #666;">
                                    {{ \Str::limit($video->description, 60) }}
                                </p>
                                <p class="text-muted mb-1" style="font-size: 12px;">
                                    Published on: {{ $video->created_at->format('d/m/Y') }}
                                </p>
                                <a href="{{ route('videos.show', $video) }}" class="btn btn-outline-primary btn-sm mt-auto">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <!-- Back Button -->
        <div class="mt-4 text-center">
            <a href="{{ route('series.index') }}" class="btn btn-secondary">← Back to Series</a>
        </div>
    </div>

    <!-- CSS Styles -->
    <style>
        .container {
            padding: 40px;
        }

        .card {
            border: none;
            display: flex;
            flex-direction: column;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            object-fit: cover;
        }

        .card-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        .card-text {
            font-size: 14px;
            color: #666;
        }

        .btn-outline-primary {
            border-color: #007bff;
            color: #007bff;
            font-size: 14px;
        }

        .btn-outline-primary:hover {
            background-color: #007bff;
            color: #fff;
        }

        @media (max-width: 576px) {
            .card-img-top {
                height: 150px;
            }

            .card-title {
                font-size: 14px;
            }

            .card-text {
                font-size: 12px;
            }
        }
    </style>
</x-videos-app-layout>
