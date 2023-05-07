<?php

namespace App\Http\Controllers\Ecole;

use App\Http\Controllers\Controller;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::all();
        return view('ecole.modules.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $module = new Module();
        return view('ecole.modules.create', compact('module'));
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
            'code' => ['required', 'string', 'max:15'],
            'coefficient' => ['required', 'integer', 'max:10'],

        ]);
        Module::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'code' => $request->code,
            'coefficient' => $request->coefficient,
        ]);
        return back()->with("success", "Module ajouté avec success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $module = Module::findOrFail($id);
        return view('ecole.modules.show', compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module = Module::findOrFail($id);
        return view('ecole.modules.edit', compact('module'));
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
            'code' => 'required|max:70',
            'nom' => 'required|min:2|max:70',
            'description' => 'required|min:2|max:70',
            'coefficient' => 'required|digits_between:1,10',

        ]);
        $module = Module::findOrFail($id);
        $module->update([
            'code' => $request->code,
            'nom' => $request->nom,
            'description' => $request->description,
            'coefficient' => $request->coefficient
        ]);
        return redirect()->route('modules.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module = Module::findOrFail($id);
        $module->delete($id);
        return redirect()->route('modules.index');
    }
}
