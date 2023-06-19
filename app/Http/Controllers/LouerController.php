<?php

namespace App\Http\Controllers;

use App\Models\Consommateur;
use App\Models\louer;
use App\Models\Maison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LouerController extends Controller
{
    //
    
    public function index()
    {
        // 
        // $louers = louer::orderBy('id', 'desc')->paginate(10);
        $louers = DB::table('louers')
        ->join('maisons', 'louers.id_maison', '=', 'maisons.id')
        ->join('consommateurs', 'louers.id_consommateur', '=', 'consommateurs.id')
        ->select('louers.*', 'maisons.id as id_maison', 'maisons.titre as titre',
                 'consommateurs.nom as nom_consommateur','consommateurs.prenom as prenom_consommateur')
        ->orderByDesc('id')
        ->paginate(10);
        return view("backend.louer",  compact('louers'));
    }

    public function ajouter()
    {
        $maisons = Maison::all()->sortDesc();
        $consommateurs = Consommateur::all()->sortDesc();

        return view('backend.ajoutLouer', compact(['maisons', 'consommateurs']));
    }

    
    public function store(Request $request)
    {
        // dd($request);
        $id_maison = $request->maison;
        $id_consommateur = $request->consommateur;
        $date_louer = $request->date_louer;
        $date_fin = $request->date_fin;
        Louer::create([
            'id_maison' => $id_maison,
            'id_consommateur' => $id_consommateur,
            'date_louer' => $date_louer,
            'date_fin' => $date_fin
            
        ]);

        return redirect()->route('louer.index')->with("success", "la transaction est bien enrigistree");
    }
    public function modifier(Request $request)
    {
        // return view('backend.ajoutLouer');
        $id = (int)$request->id;
        $louer = Louer::find($id);

        $maisons = Maison::all();
        $consommateurs = Consommateur::all();
        if ($louer === NULL) {
            return abort(404);
        } else {
            return view("backend.modifierLouer", compact(['louer', 'maisons', 'consommateurs']));
        }
    }

    public function update(Request $request)
    {
        // $louer = new Louer();
        $louer = Louer::find($request->id);
        $louer->id_maison = $request->maison;
        $louer->id_consommateur = $request->consommateur;
        $louer->date_louer = $request->date_louer;
        $louer->date_fin = $request->date_fin;

        $louer->save();

        return redirect()->route('louer.index');
    }
    public function supprimer(Request $request)
    {
        // return view('backend.ajoutLouer');
        $id = (int)$request->id;
        $louer = Louer::find($id);

        
        $louer->delete();

       
         return redirect()->route("louer.index")->with("success", "le Louer est bien supprimee");
        
    }
    public function details(Request $request)
    {
        $id = (int)$request->id;
        $louer = Louer::find($id);

        if ($louer === NULL) {
            return abort(404);
        } else {
            return view("backend.detailsLouer", compact('velouerdeur'));
        }
    }
}
