@extends('Layout.Liverpool')

@section('content')
<div class="container mt-5">
    <h1 class="text-danger">Liste des joueurs</h1>
    @if($posts->count() > 0)
        <ol class="list-group">
            @foreach($posts as $post)
                <li class="list-group-item"><a href="{{ route('RouteJoueur', ['id' => $post->id]) }}" class="text-danger">{{ $post->title }}</a></li>
            @endforeach
        </ol>
    @else
        <span class="text">Aucun joueur disponible actuellement</span>
    @endif
</div>
@endsection
