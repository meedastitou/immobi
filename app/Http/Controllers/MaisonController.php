<?php

namespace App\Http\Controllers;

use App\Models\Maison;
use App\Models\maison_categorie;
use App\Models\maison_images;
use App\Models\Vendeur;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class MaisonController extends Controller
{
    //

    //
    public function index()
    {
        $maisons = Maison::orderBy('id', 'desc')->paginate(10);
        $all_vendeurs = Vendeur::all();
        $vendeurs = [];
        foreach($all_vendeurs as $vendeur){
            $vendeurs[$vendeur->id] = $vendeur->nom . " " . $vendeur->prenom;
        }
        return view("backend.maison",  compact(['maisons', 'vendeurs']));
    }

    public function ajouter()
    {
        $vendeurs = Vendeur::all();

        return view('backend.ajoutMaison', compact('vendeurs'));
    }

    
    public function store(Request $request)
    {
        // dd($request);
        $titre              = $request->titre;
        $description        = $request->description;
        $nb_chambre         = $request->nb_chambre;
        $nb_douche          = $request->nb_douche;
        $prix_vende         = $request->prix_vende == NULL ? 0 : $request->prix_vende;
        $prix_louer_moin    = $request->prix_louer_moin == NULL ? 0 : $request->prix_louer_moin;
        $prix_louer_jour    = $request->prix_louer_jour == NULL ? 0 : $request->prix_louer_jour;
        $owner              = $request->owner;
        $status             = $request->status;
        $categories         = $request->categories;
        $surface_maison     = $request->surface_maison;
        $surface_terre      = $request->surface_terre;
        // $images             = $request->images;
        
        
        $image_capt = '';
        if ($request->hasFile('capt')) {
            $image_capt = $request->file('capt')->store('images', 'images');
        }
        $maison= Maison::create([
                    'titre' => $titre,
                    'description' => $description,
                    'nb_chambre' => $nb_chambre,
                    'prix_vende' => $prix_vende,
                    'prix_louer_moin' => $prix_louer_moin,
                    'prix_louer_jour' => $prix_louer_jour,
                    'nb_douche' => $nb_douche,
                    'owner' => $owner,
                    'status' => $status,
                    'capt'   => $image_capt,   
                    'surface_maison' => $surface_maison,
                    'surface_terre' => $surface_terre
        ]);

        foreach($categories as $categorie){
            maison_categorie::create([
                'id_maison'=> $maison->id,
                'id_categorie' => $categorie
            ]);
        }

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {  
                $imagePath = $image->store('images', 'images');
                $imagePaths[] = $imagePath;
            }
        }
       
        foreach ($imagePaths as $path) {
            $yourModel = maison_images::create([
                'lien' => $path,
                'id_maison' => $maison->id
            ]);
        }

        return redirect()->route('maison.index')->with("success", "la Maison est bien enrigistree");
    }

    public function modifier(Request $request)
    {
        $id = (int)$request->id;
        $maison = Maison::find($id);
        $maison_images= maison_images::where('id_maison', $id)->get();
        $vendeurs = Vendeur::all();
        
        if ($maison === NULL) {
            return abort(404);
        } else {
            return view("backend.modifierMaison", compact(['maison', 'maison_images', 'vendeurs']));
        }
    }

    public function update(Request $request)
    {
        // $consommateur = new Consommateur();
        $maison = Maison::find($request->id);
        $image_capt = '';
        if ($request->hasFile('capt')) {
            if (File::exists("images/".$maison->capt)) {
                File::delete("images/".$maison->capt);
            }
            $image_capt = $request->file('capt')->store('images', 'images');
            $maison->capt           = $image_capt;
        }


        $maison->titre              = $request->titre;
        $maison->description        = $request->description;
        $maison->nb_chambre         = $request->nb_chambre;
        $maison->nb_douche          = $request->nb_douche;
        $maison->prix_vende         = $request->prix_vende == NULL ? 0 : $request->prix_vende;
        $maison->prix_louer_moin    = $request->prix_louer_moin == NULL ? 0 : $request->prix_louer_moin;
        $maison->prix_louer_jour    = $request->prix_louer_jour == NULL ? 0 : $request->prix_louer_jour;
        $maison->owner              = $request->owner;
        $maison->status             = $request->status;
        $maison->surface_maison     = $request->surface_maison;
        $maison->surface_terre      = $request->surface_terre;
        

        $maison->save();

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {  
                $imagePath = $image->store('images', 'images');
                $imagePaths[] = $imagePath;
            }
        }
       
        foreach ($imagePaths as $path) {
            $yourModel = maison_images::create([
                'lien' => $path,
                'id_maison' => $maison->id
            ]);
        }


        return redirect()->route('maison.index');
    }
    
    public function supprimer(Request $request)
    {
        $id = (int)$request->id;
        $maison = Maison::find($id);

        
        $maison->delete();

       
         return redirect()->route("maison.index")->with("success", "le Maison est bien supprimee");
        
    }
    public function details(Request $request)
    {
        $id = (int)$request->id;
        $maison = Maison::find($id);
        $owner = Vendeur::find($maison->owner);
        $maison_images= maison_images::where('id_maison', $id)->get();

        if ($maison === NULL) {
            return abort(404);
        } else {
            return view("backend.detailsMaison", compact(['maison', 'owner', 'maison_images']));
        }
    }

    public function deleteimage($id){
        $images=maison_images::findOrFail($id);
        if (File::exists("images/".$images->lien)) {
           File::delete("images/".$images->lien);
        }

       maison_images::find($id)->delete();
       return back();
   }
}
