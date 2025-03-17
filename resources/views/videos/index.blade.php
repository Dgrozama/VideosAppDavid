<x-videos-app-layout>
    <div class="container">
        <div class="row">
            @foreach ($videos as $video)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card border-0 shadow-sm rounded" onclick="window.location='{{ route('videos.show', $video->id) }}'">
                        <!-- Miniatura com a imatge destacada -->
                        <iframe class="card-img-top" width="560" height="315" src="{{ $video->url }}?autoplay=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="pointer-events: none;"></iframe>

                        <!-- Títol i descripció -->
                        <div class="card-body p-2">
                            <h5 class="card-title text-truncate" style="font-size: 14px; font-weight: 600;">{{ $video->title }}</h5>
                            <p class="card-text text-truncate" style="font-size: 12px; color: #606060;">{{ \Str::limit($video->description, 60) }}</p>
                            <a href="{{ route('videos.show', $video->id) }}" class="btn btn-outline-primary btn-sm">Veure Detall</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <style>
        .container {
            padding: 20px;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-radius: 0;
            cursor: pointer;
        }

        .card {
            border: none;
            display: flex;
            flex-direction: column;
            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
            border-radius: 0;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: scale(1.03);
        }

        .card-body {
            padding: 10px;
        }

        .card-title {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .card-text {
            font-size: 14px;
            color: #606060;
        }

        .btn-outline-primary {
            border-color: #cc0000;
            color: #cc0000;
            font-size: 14px;
        }

        .btn-outline-primary:hover {
            background-color: #cc0000;
            color: #fff;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        /* Estil responsiu */
        @media (max-width: 1200px) {
            .col-lg-3 {
                flex: 1 1 48%;
            }
        }

        @media (max-width: 992px) {
            .col-md-4 {
                flex: 1 1 48%;
            }
        }

        @media (max-width: 768px) {
            .col-sm-6 {
                flex: 1 1 48%;
            }
        }

        @media (max-width: 576px) {
            .col-sm-6 {
                flex: 1 1 100%;
            }

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
