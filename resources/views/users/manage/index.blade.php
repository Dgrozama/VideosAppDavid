<x-videos-app-layout>

    <div class="container">
        <h1>Gestió d'Usuaris</h1>

        @if(session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif

        <!-- Botó destacat per crear usuari -->
        <a href="{{ route('users.manage.create') }}" class="btn btn-create-user mb-3">Crear Usuari</a>

        <!-- Taula responsive -->
        <div class="table-responsive">
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Accions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.manage.edit', $user) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('users.manage.destroy', $user) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Estàs segur?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Estils CSS corregits -->
    <style>
        .container {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        h1 {
            font-size: 22px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }

        /* Botó per crear usuari */
        .btn-create-user {
            background-color: #007bff;
            color: white;
            font-size: 14px;
            padding: 10px 15px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }

        .btn-create-user:hover {
            background-color: #0056b3;
        }

        /* Missatge d'èxit */
        .alert {
            font-size: 14px;
            padding: 8px;
            background-color: #d4edda;
            color: #155724;
            border-left: 4px solid #28a745;
        }

        /* Taula */
        .table {
            width: 100%;
            background-color: white;
            border-collapse: collapse;
            font-size: 14px;
        }

        .table th, .table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #007bff;
            color: white;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f8f9fa;
        }

        .btn-warning, .btn-danger {
            font-size: 12px;
            padding: 5px 10px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }

        .btn-warning {
            background-color: #ffc107;
            color: black;
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

        /* Taula responsive */
        .table-responsive {
            overflow-x: auto;
        }

        @media (max-width: 768px) {
            .table {
                font-size: 12px;
            }
            .btn-create-user, .btn-warning, .btn-danger {
                font-size: 12px;
                padding: 6px 10px;
            }
        }
    </style>

</x-videos-app-layout>
