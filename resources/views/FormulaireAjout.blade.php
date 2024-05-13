@extends('Layout.Liverpool')

@section('content')
<div class="container mt-5">
    <h1 class="text-danger">Ajouter un joueur non présent sur le site</h1>

    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="erreur" style="background-color: #C8102E; color: #FFFFFF; padding: 10px; margin-bottom: 10px;">
        {{ $error }}
    </div>
    @endforeach
    @endif

    <form method="POST" action="{{ route('RouteAjout') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Nom complet du joueur:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description du joueur:</label>
            <textarea class="form-control" id="description" name="description" rows="6"></textarea>
        </div>

        <div class="mb-3">
            <label for="poste" class="form-label">Poste :</label>
            <select class="form-control" id="poste" name="poste">
                <option value="" disabled selected>Choisir un poste</option>
                <option value="Attaquant">Attaquant</option>
                <option value="Milieu">Milieu</option>
                <option value="Défenseur">Défenseur</option>
                <option value="Gardien">Gardien</option>
            </select>
        </div>


        <div class="mb-3">
            <label for="Joueur" class="form-label">Importez l'image du joueur:</label>
            <input class="form-control" type="file" id="Joueur" name="Joueur" accept="image/png, image/jpeg">
        </div>

        <button type="submit" class="btn btn-danger">Ajouter</button>
    </form>
</div>
@endsection