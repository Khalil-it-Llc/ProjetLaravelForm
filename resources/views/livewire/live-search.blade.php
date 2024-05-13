<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-danger text-white">Recherchez un joueur :</div>

                <div class="card-body">
                    <div class="input-group mb-3">
                        <input type="text" wire:model.lazy="name" wire:input="updateName" class="form-control" placeholder="Nom du joueur" aria-label="Nom du joueur" aria-describedby="basic-addon2">
                        <span class="input-group-text bg-danger text-white">Rech...</span>
                    </div>

                    <!-- Affichage des résultats de la recherche -->
                    @if($joueurs && $name)
                    <div class="list-group mt-2">
                        @foreach($joueurs as $joueur)
                        <div class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><a href="{{ route('RouteJoueur', ['id' => $joueur['id']]) }}">{{ $joueur['title'] }}</a></h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>