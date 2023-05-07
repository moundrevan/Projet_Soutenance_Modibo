<?php

namespace App\Http\Controllers\Ecole;

use App\Http\Controllers\Controller;
use App\Models\Cycle;
use Illuminate\Http\Request;

class CycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cycles = Cycle::all();
        return view('ecole.cycles.index', compact('cycles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cycle = new Cycle();
        return view('ecole.cycles.create', compact('cycle'));
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
            'nom' => ['required', 'string', 'max:70'],
            'description' => ['required', 'string', 'max:70'],
            'duree' => ['required', 'string', 'max:70']
        ]);
        Cycle::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'duree' => $request->duree
        ]);
        return back()->with("success", "Cycle ajouté avec success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cycle = Cycle::findOrFail($id);
        return view('ecole.cycles.show', compact('cycle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cycle = Cycle::findOrFail($id);
        return view('ecole.cycles.edit', compact('cycle'));
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
            'nom'         => 'required|min:2|max:70',
            'description' => 'required|min:2|max:70',
            'duree'       => 'required|min:2|max:70'
        ]);
        $cycle = Cycle::findOrFail($id);
        $cycle->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'duree' => $request->duree
        ]);
        return redirect()->route('cycles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cycle = Cycle::findOrFail($id);
        $cycle->delete();
        return redirect()->route('cycles.index');
    }
}
