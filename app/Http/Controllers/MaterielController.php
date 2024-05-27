<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AfficherListeMateriels()
    {
        $materiels = Materiel::all();
        return view('index',['materiels'=> $materiels]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function AjouterMateriels(Request $request)
    {
        $materiel = new Materiel ;
        $materiel->marque = $request['marque'];
        $materiel->categorie = $request['categorie'];
        $materiel->dateDebutUtilisation = $request['dateD'];
        $materiel->save();
        return redirect('/materiels');
    }

    /**
     * Display the specified resource.
     */
    public function show(Materiel $materiel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materiel $materiel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materiel $materiel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function SupprimerMateriels(Materiel $materiel)
    {
        $materiel->employes()->detach();
        $materiel->delete();
        return redirect('materiels');
    }
}
