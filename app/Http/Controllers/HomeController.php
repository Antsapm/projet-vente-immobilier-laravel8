<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Terrain;
use App\Models\Cite;
use App\Models\Logement;
use App\Models\Agence;
use App\Models\Client;

class HomeController extends Controller
{
    public function page()
    {

        $terrain = DB::table('_terrain')->join('Client','_terrain.num_cli','=','Client.num_cli')
        ->select('_terrain.*','Client.nom_cli')
        ->get();
        $terrain_vente = DB::table('_terrain')->join('Client','_terrain.num_cli','=','Client.num_cli')
            ->select('_terrain.*','Client.nom_cli')->where('_terrain.situation','à vendre')
            ->get();
        $cite = Cite::all();
        $Cite_vente = DB::table('Cite')->join('Client','Cite.num_cli','=','Client.num_cli')
            ->select('Cite.*','Client.nom_cli')->where('Cite.situation','à vendre')
            ->get();
        $logement = Logement::all();
        $Logement_vente = DB::table('Logement')->join('Client','Logement.num_cli','=','Client.num_cli')
            ->select('Logement.*','Client.nom_cli')->where('Logement.situation','à vendre')
            ->get();
        $agence = Agence::all();
        $client = Client::all();

        return view('home', ['terrain'=> $terrain, 'terrain_vente'=>$terrain_vente, 'cite_vente'=>$Cite_vente,
        'cite' => $cite, 'logement'=>$logement, 'logement_vente'=>$Cite_vente,
        'agence' => $agence, 'client'=> $client]);
    }

    public function getDetailTerrain(Request $request){
        $validatedDate = $request->validate([
            'id_Terrain' => 'required',
        ]);
        $id_Terrain = $validatedDate['id_Terrain'];
        $detail = DB::table('_terrain')->join('Agence','_terrain.num_agence','=','Agence.num_agence')
            ->join('Client','_terrain.num_cli','=','Client.num_cli')
            ->select('_terrain.*','Client.*','Agence.*')
            ->where('_terrain.num_terrain',"$id_Terrain")
            ->get();

        return response()->json(['success' => $detail]);
    }
    public function getDetailCite(Request $request){
        $validatedDate = $request->validate([
            'id_Cite' => 'required',
        ]);
        $id_Cite = $validatedDate['id_Cite'];
        $detail = DB::table('Cite')->join('_terrain','Cite.num_terrain','=','_terrain.num_terrain')
            ->join('Client','Cite.num_cli','=','Client.num_cli')
            ->select('Cite.*','_terrain.*','Client.*')
            ->where('Cite.num_cite',"$id_Cite")
            ->get();

        return response()->json(['success' => $detail]);
    }

    public function selectClient(Request $request){
        $detail = DB::table('Client')->join('Agence','Client.num_agence','=','Agence.num_agence')
            ->select('Client.*','Agence.*')
            ->get();

        return response()->json(['success' => $detail]);
    }
}
