<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Idee;
use Illuminate\Http\Request;

class IdeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // On récupère toutes les idées
        $idees = Idee::all();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($idees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // La validation de données
        $this->validate($request, [
            'titre' => 'required|max:100',
            'description' => 'required|',
        ]);

        // On crée une nouvelle idée
        $idee = Idee::create([
            'titre' => $request->titre,
            'description' => $request->description,
        ]);

        // On retourne les informations de la nouvelle idee en JSON
        return response()->json($idee, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idee  $idee
     * @return \Illuminate\Http\Response
     */
    public function show(Idee $idee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Idee  $idee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Idee $idee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idee  $idee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idee $idee)
    {
        //
    }
}
