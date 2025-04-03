<x-videos-app-layout>
    <div class="container">
        <h1>Crear Usuari</h1>

        @if($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('users.manage.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" class="form-control" data-qa="input-name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" data-qa="input-email" required>
            </div>

            <div class="form-group">
                <label for="password">Contrasenya</label>
                <input type="password" name="password" class="form-control" data-qa="input-password" required>
            </div>

            <button type="submit" class="btn btn-create-user">Crear</button>
        </form>
    </div>

    <!-- Estils CSS corregits -->
    <style>
        .container {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            max-width: 400px;
            margin: auto;
        }

        h1 {
            font-size: 22px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            text-align: center;
        }

        /* Botó de crear usuari */
        .btn-create-user {
            background-color: #007bff;
            color: white;
            font-size: 14px;
            font-weight: bold;
            padding: 10px;
            border: none;
            border-radius: 4px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-create-user:hover {
            background-color: #0056b3;
        }

        /* Alertes */
        .alert-danger {
            font-size: 14px;
            padding: 8px;
            background-color: #f8d7da;
            color: #721c24;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        /* Estils dels inputs */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 14px;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        .form-control {
            font-size: 14px;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            width: 100%;
        }

        .form-control:focus {
            border-color: #0056b3;
            outline: none;
        }
    </style>
</x-videos-app-layout>
