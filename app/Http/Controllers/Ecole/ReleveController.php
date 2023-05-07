<?php

namespace App\Http\Controllers\Ecole;

use App\Models\Classe;
use App\Models\Releve;
use App\Models\Matiere;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Promotion;
use App\Models\Specialite;

class ReleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $releves = Releve::all();
        return view('ecole.releves.index', compact('releves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $releve = new Releve();
        $classes = Classe::orderBy('nom', 'asc')->get();
        $matieres = Matiere::orderBy('nom', 'asc')->get();
        $specialites = Specialite::orderBy('nom', 'asc')->get();
        $promotions = Promotion::orderBy('libelle', 'asc')->get();
        return view('ecole.releves.create', compact('releve', 'classes', 'matieres', 'specialites', 'promotions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'classe_id' => ['required', 'exists:classes,id'],
            'matiere_id' => ['required', 'exists:matieres,id'],
            'promotion_id' => ['required', 'exists:promotions,id'],
            'specialite_id' => ['required', 'exists:specialites,id'],
            'examen' => ['required', 'string', 'max:255'],
            'devoir' => ['required', 'string', 'max:255'],
            'semestre' => ['required', 'string', 'max:255'],
            'credit' => ['required', 'string', 'max:255']
        ]);
        Releve::create([
            'classe_id' => $request->classe_id,
            'matiere_id' => $request->matiere_id,
            'promotion_id' => $request->promotion_id,
            'specialite_id' => $request->specialite_id,
            'examen' => $request->examen,
            'devoir' => $request->devoir,
            'semestre' => $request->semestre,
            'credit' => $request->credit
        ]);
        return back()->with('success', 'Le relévé de note a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $releve = Releve::findOrFail($id);
        return view('ecole.releves.show', compact('releve'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $releve = Releve::findOrFail($id);
        return view('ecole.releves.edit', compact('releve'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $releve = Releve::findOrFail($id);
        $releve->delete();
        return redirect()->route('releves.index');
    }
}
