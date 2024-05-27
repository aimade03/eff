<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Materiel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AfficherListEmployes()
    {
        $employes = Employe::all();
        return view('home',['employes'=>$employes]); 
    }

    public function consulterDetails(Employe $employe){
        return view('details',['materiels' => $employe->materiels]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Employe $employe)
    {
        return view('form',['employe' => $employe,'materiels' => Materiel::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Employe $employe)
    {
        $matriel = Materiel::find($request['materiel_id']);
       
        $employe->materiels()->attach($matriel->id,[
            'dateDebutAffectation' => $request['dateD'],
            'dateFinAffectation' => $request['dateF']
        ]);
        return redirect('/employes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employe $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employe $employe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employe $employe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employe $employe,Materiel $matriel)
    {
        $employe->materiels()->detach($matriel->id);
        return redirect('/employes/'.$employe->id);
    }
}
