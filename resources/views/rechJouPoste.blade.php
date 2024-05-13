<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liverpool</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    @livewireStyles

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        /* Couleurs Liverpool FC */
        .liverpool-red {
            background-color: #c8102e;
            /* Rouge */
            color: white;
            border: 1px solid #c8102e;
        }

        .liverpool-white {
            background-color: white;
            /* Blanc */
            color: #c8102e;
            /* Rouge */
            border: 1px solid #c8102e;
        }

        /* Style des boutons */
        .button {
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        /* Style des divs */
        .project {
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;

        }

        .project a {
            display: inline-block;
            margin: 10px;
            /* Marge équivalente sur tous les côtés */
            padding: 10px;
            /* Espace interne */
        }

        /* Centrer le contenu */
        .center-content {
            margin-top: 5%;
            /* Diminuer la marge supérieure */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .white-text {
            color: black;
        }
    </style>


</head>

<body>
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
    <div class="center-content">
        <div x-data="{ selectedTab : 'all',
            activeClasses: 'bg-red-500 text-white',
            inactiveClasses: 'bg-white text-black'}">
            <x-projets />

        </div>
    </div>


    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-zHqXQkWJWVRp8i4oX+TmAphA6k/jYo2zAa5F/hpX4Z6dy0j6h82d3xbLekAl2wjj" crossorigin="anonymous"></script> <!-- Ajout des scripts Bootstrap -->


</body>

</html>