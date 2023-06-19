<?php

namespace App\Http\Controllers;

use App\Models\Maison;
use App\Models\Vendeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendeurController extends Controller
{
    //
    public function index()
    {
        $vendeurs = Vendeur::orderBy('id', 'desc')->paginate(10);
        return view("backend.vendeur",  compact('vendeurs'));
    }

    public function ajouter()
    {
        return view('backend.ajoutVendeur');
    }

    
    public function store(Request $request)
    {
        // dd($request);
        $nom = $request->nom;
        $prenom = $request->prenom;
        $cne = $request->cne;
        $tel = $request->tel;
        $email = $request->email;
        Vendeur::create([
            'cne' => $cne,
            'nom' => $nom,
            'prenom' => $prenom,
            'tel' => $tel,
            'email' => $email,
        ]);

        return redirect()->route('vendeur.index')->with("success", "le Vendeur " . $nom . " est bien enrigistree");
    }
    public function modifier(Request $request)
    {
        $id = (int)$request->id;
        $vendeur = Vendeur::find($id);

        if ($vendeur === NULL) {
            return abort(404);
        } else {
            return view("backend.modifierVendeur", compact('vendeur'));
        }
    }

    public function update(Request $request)
    {
        // $consommateur = new Consommateur();
        $vendeur = Vendeur::find($request->id);
        $vendeur->nom = $request->nom;
        $vendeur->prenom = $request->prenom;
        $vendeur->cne = $request->cne;
        $vendeur->tel = $request->tel;
        $vendeur->email = $request->email;

        $vendeur->save();

        return redirect()->route('vendeur.index');
    }
    
    public function supprimer(Request $request)
    {
        $id = (int)$request->id;
        $vendeur = Vendeur::find($id);

        
        $vendeur->delete();

       
         return redirect()->route("vendeur.index")->with("success", "le Vendeur est bien supprimee");
        
    }
    public function details(Request $request)
    {
        $id = (int)$request->id;
        $vendeur = Vendeur::find($id);
        
        // $maisons = DB::table('maisons')
        // ->join('maison_images', 'maisons.id', '=', 'maison_images.id_maison')
        // ->select('maison_images.id_maison')
        // ->where('maisons.owner', '=', $id)
        // ->groupBy('id_maison')
        // // ->paginate(10);
        // ->get();
        // foreach($maisons as $maison){
        //     var_dump($maison);
        // }
        if ($vendeur === NULL) {
            return abort(404);
        } else {
            return view("backend.detailsVendeur", compact(['vendeur']));
        }
    }

}
