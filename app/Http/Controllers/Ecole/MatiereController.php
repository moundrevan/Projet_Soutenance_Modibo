<?php

namespace App\Http\Controllers\Ecole;

use App\Http\Controllers\Controller;
use App\Models\Matiere;
use App\Models\Module;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matieres = Matiere::all();
        return view('ecole.matieres.index', compact('matieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matiere = new Matiere();
        $modules = Module::orderBy('nom', 'asc')->get();
        return view('ecole.matieres.create', compact('matiere', 'modules'));
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
            'nom' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'module_id' => ['required', 'exists:modules,id'],
            'coefficient' => ['required', 'integer', 'max:10'],

        ]);
        $matiere = Matiere::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'module_id' => $request->module_id,
            'coefficient' => $request->coefficient,
        ]);
        return back()->with("success", "Matière ajoutée avec success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matiere = Matiere::findOrFail($id);
        return view('ecole.matieres.show', compact('matiere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matiere = Matiere::findOrFail($id);
        $modules = Module::orderBy('nom', 'asc')->get();
        return view('ecole.matieres.edit', compact('matiere', 'modules'));
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
            'module_id' => 'required|max:70',
            'nom' => 'required|min:2|max:70',
            'description' => 'required|min:2|max:70',
            'coefficient' => 'required|digits_between:1,10',

        ]);
        $matiere = Matiere::findOrFail($id);
        $matiere->update([
            'module_id' => $request->module_id,
            'nom' => $request->nom,
            'description' => $request->description,
            'coefficient' => $request->coefficient
        ]);
        return redirect()->route('matieres.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matiere = Matiere::findOrFail($id);
        $matiere->delete($id);
        return redirect()->route('matieres.index');
    }
}
