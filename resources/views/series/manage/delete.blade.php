<x-videos-app-layout>
    <div class="container">
        <h1 class="text-center mb-4" style="font-size: 28px; font-weight: bold; color: #dc3545;">Eliminar Sèrie</h1>

        <p class="text-center mb-4" style="font-size: 16px; color: #555;">
            Estàs a punt d'eliminar la sèrie <strong>{{ $serie->title }}</strong>. Si la sèrie té vídeos associats, aquests es desassignaran de manera automàtica. Vols continuar?
        </p>

        <form action="{{ route('series.manage.destroy', $serie) }}" method="POST" data-qa="delete-series-form" class="text-center">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger btn-lg me-3" style="padding: 10px 30px; font-size: 16px;">Eliminar Sèrie</button>
            <a href="{{ route('series.manage.index') }}" class="btn btn-secondary btn-lg" style="padding: 10px 30px; font-size: 16px;">Cancel·lar</a>
        </form>
    </div>

    <style>
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #dc3545;
        }

        p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
            font-size: 16px;
            padding: 10px 30px;
            border-radius: 5px;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
            font-size: 16px;
            padding: 10px 30px;
            border-radius: 5px;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</x-videos-app-layout>
