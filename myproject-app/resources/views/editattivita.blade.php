<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Modifica Attività
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('attivita.update', ['attivita' => $attivita]) }}" class="mt-4">
                        @csrf
                        @method('PUT')
                       

                        <div class="form-group">
                            <label for="nomeattivita">Nome Attività:</label>
                            <input type="text" id="nomeattivita" name="nome" class="form-control" value="{{$attivita -> nome}}">
                        </div>

                        <div class="form-group">
                            <label for="descrizione">Descrizione:</label>
                            <textarea id="descrizione" name="descrizione" class="form-control">{{$attivita -> descrizione}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-outline-primary my-3">Salva</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>