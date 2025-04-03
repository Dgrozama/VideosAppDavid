<x-videos-app-layout>

    <div class="container">
        <h1>Editar Usuari</h1>

        <form action="{{ route('users.manage.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" class="form-control input-edit" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control input-edit" value="{{ $user->email }}" required>
            </div>

            <button type="submit" class="btn btn-update">Actualitzar</button>
        </form>
    </div>

    <!-- Estils CSS corregits -->
    <style>
        .container {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            max-width: 500px;
            margin: auto;
        }

        h1 {
            font-size: 22px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 14px;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        .input-edit {
            font-size: 14px;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            width: 100%;
        }

        .input-edit:focus {
            border-color: #0056b3;
            outline: none;
        }

        .btn-update {
            background-color: #007bff;
            color: white;
            font-size: 14px;
            font-weight: bold;
            padding: 10px;
            border: none;
            border-radius: 4px;
            width: 100%;
            cursor: pointer;
        }

        .btn-update:hover {
            background-color: #0056b3;
        }

        .alert-danger {
            font-size: 14px;
            padding: 8px;
            background-color: #f8d7da;
            color: #721c24;
            border-radius: 4px;
            margin-bottom: 15px;
        }
    </style>

</x-videos-app-layout>
