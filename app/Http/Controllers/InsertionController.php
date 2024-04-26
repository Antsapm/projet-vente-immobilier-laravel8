<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terrain;
use App\Models\Cite;
use App\Models\Client;
use App\Models\Logement;
use App\Models\Agence;

class InsertionController extends Controller
{
    public function traitement(Request $request){
        $request->validate([
            'localisation' => 'required|string',
            'superficie_terrain' => 'required',
        ]);

        $terrain = new Terrain;
        $terrain->localisation = $request->input('localisation');
        $terrain->superficie_terrain = $request->input('superficie_terrain');
        $terrain->num_cli = $request->input('num_cli');
        $terrain->situation = 'prorpiété';
        $terrain->save();

        return redirect()->route('home');
    }

    public function cite(Request $request){
        $request->validate([
            'libelle_cite' => 'required|string',
            'num_terrain' => 'required',
        ]);

        $cite = new cite;
        $cite->libelle_cite = $request->input('libelle_cite');
        $cite->num_terrain = $request->input('num_terrain');
        $cite->num_terrain = $request->input('num_cli');
        $cite->situation = 'prorpiété';
        $cite->save();
        //$terrain = Terrain::create([
          //  'localisation' => $request->input('localisation'),
            //'superficie_terrain' => $request->input('superficie_terrain')
        //]);

        return redirect()->route('home');
    }
    public function logement(Request $request){
        $request->validate([
            'num_agence' => 'required',
            'num_cite' => 'required',
            'type_vente' => 'required',
            'prix_logement' => 'required',
        ]);

        $logement = new Logement;
        $logement->num_agence = $request->input('num_agence');
        $logement->num_cite = $request->input('num_cite');
        $logement->type_vente = $request->input('type_vente');
        $logement->prix_logement = $request->input('prix_logement');
        $logement->brille_logement = $request->input('brille_logement');
        $logement->brille_logement = $request->input('num_cli');
        $logement->situation = 'prorpiété';
        $logement->save();
        //$terrain = Terrain::create([
          //  'localisation' => $request->input('localisation'),
            //'superficie_terrain' => $request->input('superficie_terrain')
        //]);

        return redirect()->route('home');
    }

    public function agence(Request $request){
        $request->validate([
            'libelle_agence' => 'required|string',
            'provinces' => 'required',
        ]);

        $agence = new Agence;
        $agence->libelle_agence = $request->input('libelle_agence');
        $agence->provinces = $request->input('provinces');
        $agence->save();
        //$terrain = Terrain::create([
          //  'localisation' => $request->input('localisation'),
            //'superficie_terrain' => $request->input('superficie_terrain')
        //]);

        return redirect()->route('home');
    }

    public function client(Request $request){
        $request->validate([
            'nom_cli' => 'required|string',
            'Adresss_cli' => 'required|string',
            'lieu_travail' => 'required|string',
        ]);

        $client = new Client;
        $client->nom_cli = $request->input('nom_cli');
        $client->Adresss_cli = $request->input('Adresss_cli');
        $client->lieu_travail = $request->input('lieu_travail');
        $client->save();
        return redirect()->route('home');
    }
}
