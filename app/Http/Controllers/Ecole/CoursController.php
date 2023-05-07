<?php

namespace App\Http\Controllers\Ecole;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Cours;
use App\Models\Matiere;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cours = Cours::all();
        return view('ecole.cours.index', compact('cours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cour = new Cours();
        $classes = Classe::orderBy('nom', 'asc')->get();
        $matieres = Matiere::orderBy('nom', 'asc')->get();
        return view('ecole.cours.create', compact('cour', 'classes', 'matieres'));
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
            'typeCours'  => ['required', 'string', 'max:255'],
            'heureDebut' => ['required', 'string', 'max:255'],
            'heureFin'   => ['required', 'string', 'max:255'],
            'date'       => ['required', 'string', 'date', 'max:255'],
            'matiere_id' => ['required', 'exists:matieres,id'],
            'classe_id'  => ['required', 'exists:classes,id'],
        ]);
        Cours::create([
            'typeCours' => $request->typeCours,
            'heureDebut' => $request->heureDebut,
            'heureFin'  => $request->heureFin,
            'date'      => $request->date,
            'matiere_id' => $request->matiere_id,
            'classe_id' => $request->classe_id
        ]);
        return back()->with('success', 'Emplois du Temps ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cour = Cours::findOrFail($id);
        return view('ecole.cours.show', compact('cour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cour = Cours::findOrFail($id);
        $classes = Classe::orderBy('nom', 'asc')->get();
        $matieres = Matiere::orderBy('nom', 'asc')->get();
        return view('ecole.cours.edit', compact('cour', 'classes', 'matieres'));
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
        $this->validate($request, [
            'typeCours' => 'required|string|max:255',
            'heureDebut' => 'required|string|max:255',
            'heureFin' => 'required|string|max:255',
            'date' => 'required|string|date|max:255',
            'matiere_id' => 'required|max:70',
            'classe_id' => 'required|max:70'
        ]);
        $cour = Cours::findOrFail($id);
        $cour->update([
            'typeCours'  => $request->typeCours,
            'heureDebut' => $request->heureDebut,
            'heureFin'  => $request->heureFin,
            'date'      => $request->date,
            'matiere_id' => $request->matiere_id,
            'classe_id' => $request->classe_id

        ]);
        return redirect()->route('cours.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cour = Cours::findOrFail($id);
        $cour->delete();
        return redirect()->route('cours.index');
    }
}
