<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liverpool</title>

    @livewireStyles

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>

<body>
    @if (!request()->is('/') && !request()->is('inscrire'))
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Liverpool</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">Page d'acceuil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('RouteCreate') }}">Ajouter un joueur de Liverpool ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('rechJou') }}">Rechercher un joueur ?</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('rechJouPoste') }}">Recherche par poste ?</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="document.getElementById('logout-form').submit();">Se déconnecter</a>
                    <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

    @endif
    @yield('content')

</body>

</html>