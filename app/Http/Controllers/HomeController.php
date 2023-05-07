<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Departement;
use App\Models\Specialite;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totaluser = User::get()->count();
        $totalspecialite = Specialite::get()->count();
        $totalcycle = Cycle::get()->count();
        $totaldepartement = Departement::get()->count();
        //$total


        return view('dashboard', compact('totaluser', 'totalspecialite', 'totalcycle', 'totaldepartement'));
    }
}
