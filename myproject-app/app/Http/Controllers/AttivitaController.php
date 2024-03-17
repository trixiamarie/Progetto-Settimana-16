<?php

namespace App\Http\Controllers;

use App\Models\Attivita;
use App\Models\Progetti;
use App\Models\Progetto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttivitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function nuovaattivita($id){
       
        return view('newattivita', ['project_id' => $id]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descrizione' => 'nullable|string',
            'project_id' => 'required|integer|exists:progetti,id',
        ]);
    
        Attivita::create([
            'nome' => $request->nome,
            'descrizione' => $request->descrizione,
            'project_id' => $request->project_id,
        ]);
    
        
        return redirect()->route("dettaglioprogetto", ['id' => $request->project_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Attivita $attivita)
{
    
    return view('dettaglioattivita', compact('attivita'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attivita $attivita)
    {
        return view('editattivita', compact('attivita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attivita $attivita)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descrizione' => 'nullable|string',
        ]);
    
        $attivita->update([
            'nome' => $request->nome,
            'descrizione' => $request->descrizione,
        ]);
        return view('dettaglioattivita', compact('attivita'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attivita $attivita)
    {
        $progetto_id = $attivita->project_id;
        $attivita->delete();
        return redirect()->route('dettaglioprogetto', ['id' => $progetto_id]);
    }
}
