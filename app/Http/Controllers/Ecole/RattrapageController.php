<?php

namespace App\Http\Controllers\Ecole;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Matiere;
use App\Models\Rattrapage;
use Illuminate\Http\Request;

class RattrapageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rattrapages = Rattrapage::all();
        return view('ecole.rattrapages.index', compact('rattrapages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rattrapage = new Rattrapage();
        $classes = Classe::orderBy('nom', 'asc')->get();
        $matieres = Matiere::orderBy('nom', 'asc')->get();
        return view('ecole.rattrapages.create', compact('rattrapage', 'classes', 'matieres'));
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
            'date'       => ['required', 'string', 'date', 'max:255'],
            'heure'       => ['required', 'string', 'max:255'],
            'effectif'       => ['required', 'string', 'max:255']
        ]);
        Rattrapage::create([
            'classe_id' => $request->classe_id,
            'matiere_id' => $request->matiere_id,
            'date' => $request->date,
            'heure' => $request->heure,
            'effectif' => $request->effectif
        ]);
        return back()->with('success', 'Le rattrapage a été ajouté avec succèss!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rattrapage = Rattrapage::findOrFail($id);
        return view('ecole.rattrapages.show', compact('rattrapage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rattrapage = Rattrapage::findOrFail($id);
        return view('ecole.rattrapages.edit', compact('rattrapage'));
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
        $rattrapage = Rattrapage::findOrFail($id);
        $rattrapage->delete();
        return redirect()->route('rattrapages.index');
    }
}
