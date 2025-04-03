<x-videos-app-layout>

    <div class="container">
        <h1>Llista d'Usuaris</h1>

        <form method="GET" action="{{ route('users.index') }}" class="search-form">
            <div class="search-bar">
                <input type="text" name="search" class="search-input" placeholder="Cerca un usuari..." value="{{ request('search') }}">
                <button type="submit" class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>

        <div class="user-list">
            @foreach($users as $user)
                <div class="user-card">
                    <div class="user-avatar">
                        @if($user->profile_photo_url)
                            <img src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}'s photo" class="avatar-img">
                        @else
                            <div class="avatar-placeholder">{{ strtoupper(substr($user->name, 0, 1)) }}</div>
                        @endif
                    </div>
                    <div class="user-info">
                        <h5 class="user-name">{{ $user->name }}</h5>
                        <p class="user-email">{{ $user->email }}</p>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Veure Detall</a>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $users->links() }}
    </div>

    <!-- Estils CSS millorats -->
    <style>
        :root {
            --primary-color: #007bff;
            --primary-hover: #0056b3;
            --bg-light: #f4f7fc;
            --bg-white: #ffffff;
            --text-dark: #333;
            --text-gray: #555;
            --border-radius: 10px;
            --box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 900px;
            margin: auto;
            padding: 40px;

        }

        h1 {
            font-size: 26px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 25px;
        }

        .search-form {
            max-width: 500px;
            margin: 0 auto 20px;
        }

        .search-bar {
            display: flex;
            align-items: center;
            border-radius: 50px;
            padding: 8px 15px;
        }

        .search-input {
            flex-grow: 1;
            padding: 10px;
            font-size: 16px;
            border: none;
            background: transparent;
            outline: none;
        }

        .search-btn {
            border: none;
            color: white;
            font-size: 18px;
            padding: 8px 12px;
            border-radius: 50%;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .search-btn:hover {
        }

        .user-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .user-card {
            padding: 20px;
            display: flex;
            align-items: center;
            transition: transform 0.2s ease-in-out;
        }

        .user-card:hover {
            transform: translateY(-5px);
        }

        .user-avatar {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .avatar-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-info {
            flex-grow: 1;
        }

        .user-name {
            font-size: 18px;
            font-weight: bold;
        }

        .user-email {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .btn-info {
            color: white;
            padding: 8px 14px;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s ease;
        }

        .pagination {
            justify-content: center;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .user-card {
                flex-direction: column;
                text-align: center;
                padding: 15px;
            }

            .user-avatar {
                margin-right: 0;
                margin-bottom: 10px;
            }

            .search-bar {
                width: 100%;
            }
        }
    </style>

</x-videos-app-layout>
