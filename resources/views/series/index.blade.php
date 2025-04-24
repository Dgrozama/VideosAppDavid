<x-videos-app-layout>
    <div class="container">
        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif

        <!-- Search Form -->
        <form action="{{ route('series.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search series by title..."
                       value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
            </div>
        </form>

        <!-- Series Cards -->
        <div class="row">
            @foreach ($series as $serie)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card border-0 shadow-sm rounded h-100"
                         onclick="window.location='{{ route('series.show', $serie->id) }}'">

                        <!-- Series Image or Placeholder -->
                        @if($serie->image)
                            <img src="{{ $serie->image }}" alt="{{ $serie->title }}" class="card-img-top"
                                 style="height: 180px; object-fit: cover;">
                        @else
                            <div class="card-img-top d-flex align-items-center justify-content-center bg-light"
                                 style="height: 180px; font-size: 48px; color: #aaa;">
                                🎬
                            </div>
                        @endif

                        <!-- Card Body -->
                        <div class="card-body d-flex flex-column p-3">
                            <h5 class="card-title text-truncate mb-2">{{ $serie->title }}</h5>
                            <p class="card-text text-truncate mb-3">{{ \Str::limit($serie->description, 60) }}</p>

                            <!-- Publication Info -->
                            <p class="text-muted mb-2" style="font-size: 12px;">
                                {{ $serie->published_at ? \Carbon\Carbon::parse($serie->published_at)->format('d/m/Y') : 'Not Published' }}
                            </p>

                            <!-- User Info -->
                            @if ($serie->user_name)
                                <div class="d-flex align-items-center mt-auto">
                                    @if ($serie->user_photo_url)
                                        <img src="{{ $serie->user_photo_url }}" alt="Profile Photo"
                                             class="rounded-circle me-2" width="24" height="24" style="object-fit: cover;">
                                    @else
                                        <div class="rounded-circle bg-secondary me-2 d-flex justify-content-center align-items-center"
                                             style="width: 24px; height: 24px; font-size: 12px; color: white;">
                                            {{ strtoupper(substr($serie->user_name, 0, 1)) }}
                                        </div>
                                    @endif
                                    <span style="font-size: 12px; color: #333;">{{ $serie->user_name }}</span>
                                </div>
                            @endif

                            <!-- Button -->
                            <a href="{{ route('series.show', $serie->id) }}" class="btn btn-outline-primary btn-sm mt-3">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- CSS Styles -->
    <style>
        .container {
            padding: 30px;
        }

        .card {
            border: none;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            border-radius: 10px 10px 0 0;
        }

        .card-title {
            font-size: 16px;
            font-weight: 600;
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
            gap: 20px;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .col-lg-3, .col-md-4 {
                flex: 1 1 48%;
            }
        }

        @media (max-width: 768px) {
            .col-sm-6 {
                flex: 1 1 100%;
            }
        }
    </style>
</x-videos-app-layout>
