<div>
    <button x-on:click="selectedTab = 'all'" :class="selectedTab === 'all' ? 'liverpool-red button' : 'liverpool-white button'">
        Tous les postes
    </button>
    @foreach($postes as $poste)
    <button x-on:click="selectedTab = '{{ $poste }}'" :class="selectedTab === '{{ $poste }}' || selectedTab === 'all' ? 'liverpool-red button' : 'liverpool-white button'">
        {{ $poste }}
    </button>
    @endforeach
    @foreach ($projects as $projet)
            <a href="{{ route('RouteJoueur', ['id' => $projet['id']]) }}" class="white-text project">
                <div x-data="{
                    postes : {{ Js::from($projet['poste']) }}
                }" :class="postes.includes(selectedTab) || selectedTab === 'all' ? 'block liverpool-red' : 'hidden liverpool-white'">
                    {{ $projet['title'] }}
                </div>
            </a>
            @endforeach
</div>