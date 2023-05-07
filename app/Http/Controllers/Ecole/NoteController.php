<?php

namespace App\Http\Controllers\Ecole;

use App\Models\Note;
use App\Models\User;
use App\Models\Matiere;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        return view('ecole.notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $note = new Note();
        $users = User::orderBy('nom', 'asc')->get();
        $matieres = Matiere::orderBy('nom', 'asc')->get();
        return view('ecole.notes.create', compact('note', 'users', 'matieres'));
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
            'user_id' => ['required', 'exists:users,id'],
            'matiere_id' => ['required', 'exists:matieres,id'],
            'examen' => ['required', 'string', 'max:255'],
            'devoir' => ['required', 'string', 'max:255']
        ]);
        Note::create([
            'user_id' => $request->user_id,
            'matiere_id' => $request->matiere_id,
            'examen' => $request->examen,
            'devoir' => $request->devoir
        ]);
        return back()->with('success', 'La note de note a été ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Note::findOrFail($id);
        return view('ecole.notes.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Note::findOrFail($id);
        return view('ecole.notes.edit', compact('note', compact('note')));
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
            'user_id' => 'required|max:70',
            'matiere_id' => 'required|max:70',
            'devoir' => 'required|max:20',
            'examen' => 'required|max:20'

        ]);
        $note = Note::findOrFail($id);
        $note->update([
            'user_id' => $request->user_id,
            'matiere_id' => $request->matiere_id,
            'examen' => $request->examen,
            'devoir' => $request->devoir
        ]);
        return redirect()->route('notes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();
        return redirect()->route('notes.index');
    }
}
