<x-videos-app-layout>
    <div class="container">
        <h1 class="text-center mb-4" style="font-size: 28px; font-weight: bold; color: #333;">Editar Sèrie: {{ $serie->title }}</h1>

        @if($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('series.manage.update', $serie) }}" method="POST" enctype="multipart/form-data" data-qa="edit-series-form" class="p-4 shadow-sm rounded bg-white">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="title" class="form-label" style="font-weight: 600;">Títol</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $serie->title) }}" required data-qa="input-title" placeholder="Introdueix el títol de la sèrie">
            </div>

            <div class="form-group mb-3">
                <label for="description" class="form-label" style="font-weight: 600;">Descripció</label>
                <textarea name="description" class="form-control" required data-qa="input-description" rows="4" placeholder="Escriu una descripció breu">{{ old('description', $serie->description) }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="image" class="form-label" style="font-weight: 600;">Imatge (Opcional)</label>
                <input type="file" name="image" class="form-control" data-qa="input-image">
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary btn-lg" style="padding: 10px 30px; font-size: 16px; font-weight: 600;">Actualizar Sèrie</button>
            </div>
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
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
            font-size: 14px;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
        }

        .form-label {
            font-size: 14px;
            color: #495057;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .alert {
            font-size: 14px;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</x-videos-app-layout>
