<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view("auth.profile.index", compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        return view("auth.profile.edit", compact('user'));
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

        // $prenom = ucwords($request->prenom);
        // $nom = ucwords($request->nom);
        // $email = strtolower($request->email);

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

        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function editPassword()
    {
        $user = auth()->user();

        return view('auth.profile.editPassword', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $user = auth()->user();

        if (!(Hash::check($request->oldPassword, $user->password))) {
            Session::flash('notification.message', "Votre ancien mot de passe est incorrect !");
            Session::flash('notification.type', 'error');
            return back();
        }

        $request->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required|min:8|confirmed',
        ]);

        $user->update([
            'password' => Hash::make($request->newPassword)
        ]);

        Session::flash('notification.message', "Votre mot de passe a été mis à jour avec succès !");
        Session::flash('notification.type', 'success');

        return redirect()->route('profile.index');
    }
}
