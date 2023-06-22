<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\terrain;
use App\Models\terrain_images;
use Illuminate\Http\Request;

class TerrainsController extends Controller
{
    //
    public function allTerrains(Request $request)
    {


        $column = 'prix_vende';

        if ($request->hasAny('categorie') && $request->hasAny('sorting')) {
            if ($request->sorting == 'price_hight') {

                $terrains = Terrain::where('status', "DESPONIBLE")
                    ->where($column, "<>", 0)
                    ->orderBy($column, 'desc')
                    ->paginate(12);
            } else if ($request->sorting == 'price_low') {

                $terrains = Terrain::where('status', "DESPONIBLE")
                    ->where($column, "<>", 0)
                    ->orderBy($column, 'asc')
                    ->paginate(12);
            } else {
                $terrains = Terrain::where('status', "DESPONIBLE")
                    ->where($column, "<>", 0)
                    ->orderBy('id', 'desc')
                    ->paginate(12);
            }
        
        } else {
            $terrains = Terrain::where('status', "DESPONIBLE")
                ->orderBy('id', 'desc')->paginate(12);
        }


        // $maisons = DB::table("maisons")
        // ->join('images')
        return view('terrains', compact('terrains'));
    }
    public function getTerrain (Request $request)
    {
        $id = (int)$request->id;
        $terrain = terrain::find($id);
        $terrain_images = terrain_images::where('id_terrain', $id)->get();
        if ($terrain === NULL) {
            return abort(404);
        } else {
            return view("terrain", compact(['terrain', 'terrain_images']));
        }


        // var_dump($validated);
    }

}
