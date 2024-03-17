<?php

namespace App\Http\Controllers;

use App\Models\Progetto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgettoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function nuovoprogetto(){
        $userId = Auth::id();
        return view('newproject', ['userId' => $userId]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
    
        $request->validate([
            'nome_progetto' => 'required|string|max:255',
            'descrizione' => 'nullable|string',
        ]);
    
        Progetto::create([
            'nome_progetto' => $request->nome_progetto,
            'descrizione' => $request->descrizione,
            'user_id' => $userId, 
        ]);
    
        return redirect()->route('dashboard', ['id' => $userId]);
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    
        $progetto = Progetto::with('attivita')->find($id);

        if (!$progetto) {
            abort(404, 'Progetto non trovato');
        }

        return view('dettaglioprogetto', ['progetto' => $progetto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Progetto $progetto)
    {
        return view('editprogetto', compact('progetto'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Progetto $progetto)
    {
        $userId = Auth::id();
        $request->validate([
            'nome_progetto' => 'required|string|max:255',
            'descrizione' => 'nullable|string',
        ]);
    
        $progetto->update([
            'nome_progetto' => $request->nome_progetto,
            'descrizione' => $request->descrizione,
            'user_id' => $userId, 
        ]);
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Progetto $progetto)
    {
        $id = $progetto->project_id;
        $progetto->delete();
        return redirect()->route('dashboard', ['id' => $id]);
    }
}
