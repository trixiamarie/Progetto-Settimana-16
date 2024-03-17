<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nuova Attività
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('salvaattivita') }}" class="mt-4">
                        @csrf
                        <div class="form-group">
                            <label for="progetto_id">Id Progetto</label>
                            <input type="text" id="progetto_id" name="project_id" value="{{$project_id}}" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label for="nomeattivita">Nome Attività:</label>
                            <input type="text" id="nomeattivita" name="nome" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="descrizione">Descrizione:</label>
                            <textarea id="descrizione" name="descrizione" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-outline-primary my-3">Salva</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>