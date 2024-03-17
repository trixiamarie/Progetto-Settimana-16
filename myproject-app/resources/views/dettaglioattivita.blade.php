<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ $attivita->nome }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>Dettagli dell'attività:</p>
                    <p>Nome: {{ $attivita->nome }}</p>
                    <p>Descrizione: {{ $attivita->descrizione }}</p>
                </div>
                <button type="button" class="btn btn-outline-warning"><a href="{{ route('modificaattivita', ['attivita' => $attivita]) }}">
                            Modifica Attivita
                        </a>
                    </button>
            </div>
        </div>
    </div>
</x-app-layout>
