<x-videos-app-layout>
    <div class="container">
        <h1 class="text-center mb-4" style="font-size: 28px; font-weight: bold; color: #333;">Gestió de Sèries</h1>

        <!-- Create Series Button -->
        <div class="text-center mb-4">
            <a href="{{ route('series.manage.create') }}" class="btn btn-success btn-lg" data-qa="create-series">Crear Sèrie</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success mt-3 text-center">{{ session('success') }}</div>
        @endif

        <!-- Series Table -->
        <div class="table-responsive">
            <table class="table table-hover mt-3">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Títol</th>
                    <th>Descripció</th>
                    <th>Data de Publicació</th>
                    <th>Accions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($series as $serie)
                    <tr>
                        <td>{{ $serie->id }}</td>
                        <td>{{ $serie->title }}</td>
                        <td>{{ \Str::limit($serie->description, 50) }}</td>
                        <td>{{ $serie->published_at ? \Carbon\Carbon::parse($serie->published_at)->format('d-m-Y') : 'No publicat' }}</td>
                        <td>
                            <a href="{{ route('series.manage.edit', $serie) }}" class="btn btn-warning btn-sm" data-qa="edit-series-{{ $serie->id }}">Editar</a>
                            <form action="{{ route('series.manage.destroy', $serie) }}" method="POST" style="display:inline;" data-qa="delete-series-{{ $serie->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Estàs segur que vols eliminar aquesta sèrie? Els vídeos associats també seran desassignats.')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- CSS Styles -->
    <style>
        .container {
            padding: 40px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
            font-size: 16px;
            font-weight: 600;
            padding: 12px 20px;
            border-radius: 5px;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        .alert {
            font-size: 14px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border-radius: 5px;
        }

        .table {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 14px;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table-dark th {
            background-color: #343a40;
            color: white;
        }

        .btn-warning, .btn-danger {
            font-size: 12px;
            padding: 6px 12px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn-warning {
            background-color: #ffc107;
            color: white;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        @media (max-width: 768px) {
            .table {
                font-size: 12px;
            }

            .btn-success, .btn-warning, .btn-danger {
                font-size: 12px;
                padding: 6px 12px;
            }
        }
    </style>
</x-videos-app-layout>
