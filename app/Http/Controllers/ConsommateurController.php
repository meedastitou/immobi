<?php

namespace App\Http\Controllers;

use App\Models\Consommateur;
use Illuminate\Http\Request;

class ConsommateurController extends Controller
{
    //\


    public function index()
    {
        $consommateurs = Consommateur::orderBy('id', 'desc')->paginate(10);
        return view("backend.consommateur",  compact('consommateurs'));
    }

    public function ajouter()
    {
        return view('backend.ajoutConsommateur');
    }

    
    public function store(Request $request)
    {
        // dd($request);
        $nom = $request->nom;
        $prenom = $request->prenom;
        $cne = $request->cne;
        $tel = $request->tel;
        $email = $request->email;
        $nb_personnes = $request->nb_personne;
        Consommateur::create([
            'cne' => $cne,
            'nom' => $nom,
            'prenom' => $prenom,
            'tel' => $tel,
            'email' => $email,
            "nb_personne" => $nb_personnes,
        ]);

        return redirect()->route('consommateur.index')->with("success", "le Consommateur " . $nom . " est bien enrigistree");
    }
    public function modifier(Request $request)
    {
        // return view('backend.ajoutConsommateur');
        $id = (int)$request->id;
        $consommateur = Consommateur::find($id);

        if ($consommateur === NULL) {
            return abort(404);
        } else {
            return view("backend.modifierConsommateur", compact('consommateur'));
        }
    }

    public function update(Request $request)
    {
        // $consommateur = new Consommateur();
        $consommateur = Consommateur::find($request->id);
        $consommateur->nom = $request->nom;
        $consommateur->prenom = $request->prenom;
        $consommateur->cne = $request->cne;
        $consommateur->tel = $request->tel;
        $consommateur->email = $request->email;
        $consommateur->nb_personne = $request->nb_personne;

        $consommateur->save();

        return redirect()->route('consommateur.index');
    }
    public function supprimer(Request $request)
    {
        // return view('backend.ajoutConsommateur');
        $id = (int)$request->id;
        $consommateur = Consommateur::find($id);

        
        $consommateur->delete();

       
         return redirect()->route("consommateur.index")->with("success", "le Consommateur est bien supprimee");
        
    }
    public function details(Request $request)
    {
        $id = (int)$request->id;
        $consommateur = Consommateur::find($id);

        if ($consommateur === NULL) {
            return abort(404);
        } else {
            return view("backend.detailsConsommateur", compact('veconsommateurdeur'));
        }
    }
}
