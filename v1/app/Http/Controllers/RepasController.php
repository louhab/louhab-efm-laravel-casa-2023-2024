<?php

namespace App\Http\Controllers;

use App\Models\Repas;
use Illuminate\Http\Request;
use App\Models\Categorie;

class RepasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //AfficheListRepas 
    public function index()
    {
        $repas = Repas::all();
        return  view('repas.index')->with(
            [ 
                "repas"=> $repas
             ]
        );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('repas.addRepas')->with([ "categories"=> $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function AddRepas(Request $request)
    {
        Repas::create(
            [    
                'intitule' => $request->intitule,
                'description' => $request->description,
                'categorie_id' =>  $request->categorie_id,
             ]
        );
        
        return $this->index();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Repas  $repas
     * @return \Illuminate\Http\Response
     */
    public function show(Repas $repas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Repas  $repas
     * @return \Illuminate\Http\Response
     */
    public function edit(Repas $repas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Repas  $repas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repas $repas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Repas  $repas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Repas::find($id)->delete();
        return $this->index();
    }
}
