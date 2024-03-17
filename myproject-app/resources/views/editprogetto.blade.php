<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifica Progetto
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('progetto.update', ['progetto' => $progetto]) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nome_progetto" class="form-label">Nome Progetto:</label>
                            <input type="text" id="nome_progetto" name="nome_progetto" class="form-control" value="{{ $progetto->nome_progetto }}">
                        </div>
                        <div class="mb-3">
                            <label for="descrizione" class="form-label">Descrizione:</label>
                            <textarea id="descrizione" name="descrizione" class="form-control">{{ $progetto->descrizione }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-primary my-3">Salva Modifiche</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>