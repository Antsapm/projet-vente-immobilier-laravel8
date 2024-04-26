<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function achatTerrain(Request $request){
        
        $validatedDate = $request->validate([
            'id_old' => 'required',
            'id_new' => 'required',
            'id_terrain' => 'required',
            'prix_terrain' => 'required',
            'titre_transaction' => 'required',
        ]);

        $transaction = new Transaction;
        $transaction->ancien_prop = $validatedDate['id_old'];
        $transaction->nouveau_prop = $validatedDate['id_new'];
        $transaction->id_transaction = $validatedDate['id_terrain'];
        $transaction->prix_transaction = $validatedDate['prix_terrain'];
        $transaction->libelle_transaction = $validatedDate['titre_transaction'];
        $transaction->save();
        $situation = 'propriété';
        DB::update('update _terrain set situation = ?, prix = ?, num_cli = ? where num_terrain = ?', [$situation, $transaction->prix_transaction, $transaction->nouveau_prop,$transaction->id_transaction]);

        return response()->json(['success' => "L'achât est bien validé enregistré avec succès"]);
        //return redirect()->route('home');
    }

    public function achatCite(Request $request){
        
        $validatedDate = $request->validate([
            'num_cli' => 'required',
            'type_transaction' => 'required',
            'libelle_transaction' => 'required',
            'id_transaction' => 'required',
            'prix_transaction' => 'required',
        ]);

        $transaction = new Transaction;
        $transaction->type_transaction = $validatedDate['type_transaction'];
        $transaction->libelle_transaction = $validatedDate['libelle_transaction'];
        $transaction->id_transaction = $validatedDate['id_transaction'];
        $transaction->prix_transaction = $validatedDate['prix_transaction'];
        $transaction->num_cli = $validatedDate['num_cli'];
        $transaction->save();
        return response()->json(['success' => "L'achât est enregistré avec succès"]);
        //return redirect()->route('home');
    }

    public function achatLoge(Request $request){
        
        $validatedDate = $request->validate([
            'num_cli' => 'required',
            'type_transaction' => 'required',
            'libelle_transaction' => 'required',
            'id_transaction' => 'required',
            'prix_transaction' => 'required',
        ]);

        $transaction = new Transaction;
        $transaction->type_transaction = $validatedDate['type_transaction'];
        $transaction->libelle_transaction = $validatedDate['libelle_transaction'];
        $transaction->id_transaction = $validatedDate['id_transaction'];
        $transaction->prix_transaction = $validatedDate['prix_transaction'];
        $transaction->num_cli = $validatedDate['num_cli'];
        $transaction->save();
        return response()->json(['success' => "L'achât est enregistré avec succès"]);
        //return redirect()->route('home');
    }

    public function venteTerrain(Request $request){
        $validatedDate = $request->validate([
            'id_transaction' => 'required',
            'prix_transaction' => 'required',
        ]);
        $situation = 'à vendre';
        $prix_transaction = $validatedDate['prix_transaction'];
        $id_transaction = $validatedDate['id_transaction'];

        DB::update('update _terrain set situation = ?, prix = ? where num_terrain = ?', [$situation, $prix_transaction, $id_transaction]);

        return response()->json(['success' => "Le terrain est officiellement à vendre"]);
        //return redirect()->route('home');
    }

    public function getTransactionTerrain(Request $request){
        $detail = DB::table('Transaction')->join('Client','Client.num_cli','=','Transaction.nouveau_prop')
            ->join('_terrain','_terrain.num_terrain','=','Transaction.id_transaction')
            ->select('Client.*','Transaction.*','_terrain.*')
            ->get();

        return response()->json(['success' => $detail]);
    }

    public function getDetailTrans(Request $request){
        $validatedDate = $request->validate([
            'id_Cite' => 'required'
        ]);
        $detail = DB::table('Transaction')->join('Client','Client.num_cli','=','Transaction.nouveau_prop')
            ->join('_terrain','_terrain.num_terrain','=','Transaction.id_transaction')
            ->where('Transaction.num_transaction','=',$validatedDate["id_Cite"])
            ->select('Client.*','Transaction.*','_terrain.*')
            ->get();

        return response()->json(['success' => $detail]);
    }
}
