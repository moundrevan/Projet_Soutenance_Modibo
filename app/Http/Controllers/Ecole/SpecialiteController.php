<?php

namespace App\Http\Controllers\Ecole;

use App\Http\Controllers\Controller;
use App\Models\Specialite;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialites = Specialite::all();
        return view('ecole.specialites.index', compact('specialites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialite = new Specialite();
        return view('ecole.specialites.create', compact('specialite'));
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
            'nom' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:255']
        ]);
        Specialite::create([
            'nom' => $request->nom,
            'description' => $request->description
        ]);
        return back()->with('success', 'Spécialité ajoutée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $specialite = Specialite::findOrFail($id);
        return view('ecole.specialites.show', compact('specialite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specialite = Specialite::findOrFail($id);
        return view('ecole.specialites.edit', compact('specialite'));
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
            'nom' => 'required|min:2|max:100',
            'description' => 'required|min:2|max:255'
        ]);
        $specialite = Specialite::findOrFail($id);
        $specialite->update([
            'nom' => $request->nom,
            'description' => $request->description
        ]);
        return redirect()->route('specialites.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specialite = Specialite::findOrFail($id);
        $specialite->delete();
        return redirect()->route('specialites.index');
    }
}
