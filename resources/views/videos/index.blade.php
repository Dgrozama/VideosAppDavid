<x-videos-app-layout>
    <div class="container">
        <div class="row">
            @foreach ($videos as $video)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card border-0 shadow-sm rounded" onclick="window.location='{{ route('videos.show', $video->id) }}'">
                        <!-- Miniatura com a imatge destacada -->
                        <iframe class="card-img-top" width="100%" height="200" src="{{ $video->url }}?autoplay=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="pointer-events: none;"></iframe>

                        <!-- Títol i descripció -->
                        <div class="card-body p-2">
                            <h5 class="card-title text-truncate" style="font-size: 16px; font-weight: 700;">{{ $video->title }}</h5>
                            <p class="card-text text-truncate" style="font-size: 14px; color: #606060;">{{ \Str::limit($video->description, 80) }}</p>
                            <a href="{{ route('videos.show', $video->id) }}" class="btn btn-outline-primary btn-sm">Veure Detall</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Estils CSS -->
    <style>
        .container {
            padding: 50px;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            cursor: pointer;
        }

        .card {
            border: none;
            display: flex;
            flex-direction: column;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 14px;
            color: #606060;
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
