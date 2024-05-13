@extends('Layout.Liverpool')

@section('content')
<div class="container mt-5">
    <h1 class="text-danger text-center">Connectez-vous :</h1>

    @if ($errors->any())
    <div class="erreur bg-danger text-white rounded p-3 mb-3 mx-auto" style="max-width: 400px;">
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    </div>
    @endif

    <form method="POST" action="{{ route('authenticate') }}" style="max-width: 400px; margin: 0 auto;">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail :</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe :</label>
            <input type="password" name="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-danger">Se connecter</button>
    </form>

    <div class="text-center mt-3">
        <a href="{{ route('inscrire') }}" class="text-danger">Créer un compte ?</a>
    </div>
</div>
@endsection

