<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nuovo Progetto
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('salvaprogetto'); }}">
                    @csrf 
                        <div>
                            <label for="nome_progetto" class="form-label">Nome Progetto:</label>
                            <input type="text" id="nome_progetto" name="nome_progetto" class="form-control">
                        </div>

                        <div>
                            <label for="descrizione" class="form-label">Descrizione:</label>
                            <textarea id="descrizione" name="descrizione" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-outline-primary my-3">Salva</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>