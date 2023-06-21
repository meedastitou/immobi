<?php

namespace App\Http\Controllers;

use App\Models\maison_categorie;
use App\Models\maison_images;
use App\Models\terrain;
use App\Models\Vendeur;
use Illuminate\Http\Request;

class TerrainController extends Controller
{
    //
    public function index()
    {
        $terrains = terrain::orderBy('id', 'desc')->paginate(10);
        $all_vendeurs = Vendeur::all();
        $vendeurs = [];
        foreach($all_vendeurs as $vendeur){
            $vendeurs[$vendeur->id] = $vendeur->nom . " " . $vendeur->prenom;
        }
        return view("backend.terrain",  compact(['terrains', 'vendeurs']));
    }

    public function ajouter()
    {
        $vendeurs = Vendeur::all();

        return view('backend.ajoutTerrain', compact('vendeurs'));
    }

    
    public function store(Request $request)
    {
        // dd($request);
        $titre              = $request->titre;
        $description        = $request->description;
        $prix_vende         = $request->prix_vende;
        $owner              = $request->owner;
        $status             = $request->status;
        $categorie         = $request->categorie;
        $surface_terre      = $request->surface_terre;
        // $images             = $request->images;
        
        
        $image_capt = '';
        if ($request->hasFile('capt')) {
            $image_capt = $request->file('capt')->store('images', 'images');
        }
        $terrain= Terrain::create([
                    'titre' => $titre,
                    'description' => $description,
                    'prix_vende' => $prix_vende,
                    'owner' => $owner,
                    'status' => $status,
                    'categorie' => $categorie,
                    'capt'   => $image_capt,   
                    'surface_terre' => $surface_terre
        ]);


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
                'id_maison' => $terrain->id
            ]);
        }

        return redirect()->route('terrain.index')->with("success", "la Terrain est bien enrigistree");
    }

    public function modifier(Request $request)
    {
        $id = (int)$request->id;
        $terrain = Terrain::find($id);
        $maison_images= maison_images::where('id_maison', $id)->get();
        
        if ($terrain === NULL) {
            return abort(404);
        } else {
            return view("backend.modifierMaison", compact(['terrain', 'maison_images']));
        }
    }

    public function update(Request $request)
    {
        // $consommateur = new Consommateur();
        $terrain = Terrain::find($request->id);
        $terrain->nom = $request->nom;
        $terrain->prenom = $request->prenom;
        $terrain->cne = $request->cne;
        $terrain->tel = $request->tel;
        $terrain->email = $request->email;

        $terrain->save();

        return redirect()->route('terrain.index');
    }
    
    public function supprimer(Request $request)
    {
        $id = (int)$request->id;
        $terrain = Terrain::find($id);

        
        $terrain->delete();

       
         return redirect()->route("terrain.index")->with("success", "le Terrain est bien supprimee");
        
    }
    public function details(Request $request)
    {
        $id = (int)$request->id;
        $terrain = Terrain::find($id);
        $owner = Vendeur::find($terrain->owner);
        $maison_images= maison_images::where('id_maison', $id)->get();

        if ($terrain === NULL) {
            return abort(404);
        } else {
            return view("backend.detailsMaison", compact(['terrain', 'owner', 'maison_images']));
        }
    }
}
