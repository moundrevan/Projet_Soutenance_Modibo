<?php

namespace App\Http\Controllers\Ecole;

use App\Http\Controllers\Controller;
use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departements = Departement::all();
        return view('ecole.departements.index', compact('departements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departement = new Departement();
        return view('ecole.departements.create', compact('departement'));
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:departements'],
            'telephone' => ['required', 'string', 'max:255', 'unique:departements'],
        ]);
        Departement::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone
        ]);
        return back()->with("success", "Département ajouté avec success!");
        // return redirect()->route('departements.index')->with("success", "Département ajouté avec success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departement = Departement::findOrFail($id);
        return view('ecole.departements.show', compact('departement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departement = Departement::findOrFail($id);
        return view('ecole.departements.edit', compact('departement'));
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
            'nom'           => 'required|min:2|max:70',
            'email'         => 'required|email|max:90',
            'telephone'     => 'required|digits_between:8,15',

        ]);
        $departement = Departement::findOrFail($id);

        $departement->update([
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone
        ]);
        return redirect()->route('departements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departement = Departement::findOrFail($id);
        $departement->delete();

        // Session::flash('notification.message', 'The département has been deleted successfully!');
        // Session::flash('notification.type', 'success');

        return redirect()->route('departements.index');
    }
}
