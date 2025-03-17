<x-videos-app-layout>
    <div class="container">
        <h1>Confirmar Eliminació</h1>

        <p>Estàs segur que vols eliminar el vídeo: <strong>{{ $video->title }}</strong>? Aquesta acció no es pot desfer.</p>

        <form action="{{ route('videos.manage.destroy', $video->id) }}" method="POST" data-qa="video-delete-form">
            @csrf
            @method('DELETE')

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-danger">Eliminar</button>
                <a href="{{ route('videos.manage.index') }}" class="btn btn-secondary">Cancel·lar</a>
            </div>
        </form>
    </div>

    <!-- Estils CSS -->
    <style>
        .container {
            padding: 40px;
            background-color: #f9f9f9;
            border-radius: 8px;
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            font-size: 26px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Estil per als botons */
        .btn {
            font-size: 16px;
            font-weight: 600;
            padding: 12px 20px;
            border-radius: 5px;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
            transform: scale(1.05);
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            transform: scale(1.05);
        }

        /* Disseny per a dispositius petits */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            .btn {
                font-size: 14px;
                padding: 10px 15px;
            }
        }
    </style>
</x-videos-app-layout>
