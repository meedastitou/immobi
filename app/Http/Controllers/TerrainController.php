<?php

namespace App\Http\Controllers;

use App\Models\maison_categorie;
use App\Models\maison_images;
use App\Models\terrain;
use App\Models\terrain_images;
use App\Models\Vendeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            // $image_capt = $request->file('capt')->store('images', 'images');
            $destinationPath = 'upload';
            $image_capt = $request->file('capt')->getClientOriginalName();
            $request->file('capt')->move(public_path($destinationPath), $image_capt);
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
                // $imagePath = $image->store('images', 'images');
                // $imagePaths[] = $imagePath;
                $destinationPath = 'upload';
                $myimage = $image->getClientOriginalName();
                $image->move(public_path($destinationPath), $myimage);
                $imagePaths[] = $myimage;
            }
        }
       
        foreach ($imagePaths as $path) {
            $yourModel = terrain_images::create([
                'lien' => $path,
                'id_terrain' => $terrain->id
            ]);
        }

        return redirect()->route('terrain.index')->with("success", "la Terrain est bien enrigistree");
    }


    public function modifier(Request $request)
    {
        $id = (int)$request->id;
        $terrain = Terrain::find($id);
        $terrain_images= terrain_images::where('id_terrain', $id)->get();
        $vendeurs = Vendeur::all();

        
        if ($terrain === NULL) {
            return abort(404);
        } else {
            return view("backend.modifierTerrain", compact(['terrain', 'terrain_images', 'vendeurs']));
        }
    }

    public function update(Request $request)
    {
        // $consommateur = new Consommateur();
        $terrain = Terrain::find($request->id);
        $image_capt = '';
        if ($request->hasFile('capt')) {
            if (File::exists("images/".$terrain->capt)) {
                File::delete("images/".$terrain->capt);
            }
            $destinationPath = 'upload';
            $image_capt = $request->file('capt')->getClientOriginalName();
            $request->file('capt')->move(public_path($destinationPath), $image_capt);
            // $image_capt = $request->file('capt')->store('images', 'images');
            $terrain->capt           = $image_capt;
        }


        $terrain->titre              = $request->titre;
        $terrain->description        = $request->description;
        $terrain->prix_vende         = $request->prix_vende;
        $terrain->owner              = $request->owner;
        $terrain->status             = $request->status;
        $terrain->categorie         = $request->categorie;
        $terrain->surface_terre      = $request->surface_terre;

        $terrain->save();

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {  
                $destinationPath = 'upload';
                $myimage = $image->getClientOriginalName();
                $image->move(public_path($destinationPath), $myimage);
                $imagePaths[] = $myimage;
                // $imagePath = $image->store('images', 'images');
                // $imagePaths[] = $imagePath;
            }
        }
       
        foreach ($imagePaths as $path) {
            $yourModel = maison_images::create([
                'lien' => $path,
                'id_maison' => $terrain->id
            ]);
        }

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
        $terrain_images= terrain_images::where('id_terrain', $id)->get();

        if ($terrain === NULL) {
            return abort(404);
        } else {
            return view("backend.detailsTerrain", compact(['terrain', 'owner', 'terrain_images']));
        }
    }

    public function deleteimage($id){
        $images=terrain_images::findOrFail($id);
        if (File::exists("images/".$images->lien)) {
           File::delete("images/".$images->lien);
        }

        terrain_images::find($id)->delete();
       return back();
   }
}
