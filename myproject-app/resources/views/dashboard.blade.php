<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container my-3 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <div class="container">
                    <button type="button" class="btn btn-outline-primary">
                        <a href="{{ route('nuovoprogetto')}}">
                            Nuovo Progetto
                        </a></button>
                </div>
                <div class="container">
                <table class="table my-3">
                    <thead>
                        <tr>
                            <th scope="col" class="col-1">#</th>
                            <th scope="col" class="col-8">Nome Progetto</th>
                            <th scope="col" class="col-3">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($progetti as $index => $progetto)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td> {{ $progetto->nome_progetto }}</td>
                            <td class="d-flex">
                                <button type="button" class="btn btn-outline-info mx-1"><a href="{{ route('dettaglioprogetto', ['id' => $progetto->id]) }}">Info</a></button>
                                <form action="{{ route('progetto.destroy', $progetto->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Elimina Progetto</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>