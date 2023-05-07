<?php

namespace App\Http\Controllers\Ecole;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classe::all();
        return view('ecole.classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classe = new Classe();
        return view('ecole.classes.create', compact('classe'));
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
        ]);
        $classe = Classe::create([
            'nom' => $request->nom,
            'description' => $request->description,
        ]);
        return back()->with("success", "Classe ajoutée avec success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classe = Classe::findOrFail($id);
        return view('ecole.classes.show', compact('classe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classe = Classe::findOrFail($id);
        return view('ecole.classes.edit', compact('classe'));
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
            'nom'                   => 'required|min:2|max:70',
            'description'           => 'required|min:5|max:255',

        ]);
        $classe = Classe::findOrFail($id);
        $classe->update([
            'nom' => $request->nom,
            'description' => $request->description,
        ]);
        return redirect()->route('classes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classe = Classe::findOrFail($id);
        $classe->delete();
        return redirect()->route('classes.index');
    }
}
