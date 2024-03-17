<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $progetto->nome_progetto }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <p class="my-3"> {{ $progetto->descrizione }}</p>
                <div class="my-3">
                    <button type="button" class="btn btn-outline-warning"><a href="{{ route('modificaprogetto', ['progetto' => $progetto]) }}">
                            Modifica Progetto
                        </a>
                    </button>
                </div>

                <div class="my-3">
                    <button type="button" class="btn btn-outline-primary"><a href="{{ route('nuovaattivita', ['id' => $progetto->id]) }}">
                            Nuova Attivita
                        </a>
                    </button>
                </div>

                <table class="table my-3">
                    <thead>
                        <tr>
                            <th scope="col" class="col-1">#</th>
                            <th scope="col" class="col-8">Da fare</th>
                            <th scope="col" class="col-3">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($progetto->attivita as $index =>$attivita)
                        <tr>
                            <th scope="col" class="col-1">{{ $index + 1 }}</th>
                            <th scope="col" class="col-8">{{ $attivita->nome }}</th>
                            <th scope="col" class="col-3 d-flex">
                                <button type="button" class="btn btn-outline-info me-1"><a href="{{ route('dettaglioattivita', ['attivita' => $attivita->id]) }}">Info</a></button>
                                <form action="{{ route('attivita.destroy', $attivita->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Elimina</button>
                                </form>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>