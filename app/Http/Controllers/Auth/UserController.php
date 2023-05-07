<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('auth.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('auth.users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function randomPassword()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyz~!@#$%^&*()_+=:"<>?ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }


    public function store(Request $request)
    {
        $request->validate([
            'matricule' => ['required', 'string', 'max:255'],
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'max:10', 'min:1'],
            'dateNaissance' => ['required', 'string', 'date', 'max:255'],
            'lieuNaissance' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telephone' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        User::create([
            'matricule' => $request->matricule,
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'sexe' => $request->sexe,
            'dateNaissance' => $request->dateNaissance,
            'lieuNaissance' => $request->lieuNaissance,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'password'      => Hash::make($this->randomPassword())

        ]);
        return back()->with('success', 'Utilisateur a été crée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('auth.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('auth.users.edit', compact('user'));
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
            'matricule'     => 'required|min:5|max:70',
            'prenom'        => 'required|min:2|max:70',
            'nom'           => 'required|min:2|max:70',
            'sexe'           => 'required|min:1|max:1',
            'dateNaissance' => 'required|min:3|max:70',
            'lieuNaissance' => 'required|min:3|max:70',
            'email'         => 'required|email|max:90',
            'telephone'     => 'required|digits_between:8,15',

        ]);
        $user = User::findOrFail($id);
        $user->update([
            'matricule' => $request->matricule,
            'prenom'    => $request->prenom,
            'nom'       => $request->nom,
            'sexe'      => $request->sexe,
            'dateNaissance' => $request->dateNaissance,
            'lieuNaissance' => $request->lieuNaissance,
            'email'     => $request->email,
            'telephone' => $request->telephone,
        ]);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
