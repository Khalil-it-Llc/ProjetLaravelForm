@extends('Layout.Liverpool')

@section('content')
<div class="container mt-5">
    <h1 class="text-danger text-center">Inscrivez-vous :</h1>

    @if ($errors->any())
    <div class="erreur bg-danger text-white rounded p-3 mb-3 mx-auto" style="max-width: 400px;">
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    </div>
    @endif

    <form method="POST" action="{{ route('authenticateIns') }}" style="max-width: 400px; margin: 0 auto;">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom, Prénom :</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail :</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe :</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
            <label for="password2" class="form-label">Confirmer votre mot de passe :</label>
            <input type="password" name="password2" class="form-control">
        </div>

        <button type="submit" class="btn btn-danger">S'inscrire</button>
    </form>
</div>
@endsection
