@extends('Layout.Liverpool')

@section('content')
<div class="container mt-5">
    <h1 class="text-danger">{{ $post->title }}</h1>
    <p class="text">{{ $post->description }}</p>
    
    @if($post->image && $post->image->path)
        <img src="{{ Storage::url($post->image->path) }}" alt="Image du joueur" class="img-fluid">
    @else
        <p class="text">Pas encore d'image disponible.</p>
    @endif
</div>
@endsection


