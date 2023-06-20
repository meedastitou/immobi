<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Maison;
use App\Models\maison_images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class MaisonsController extends Controller
{

    //
    public function allMaisons(Request $request)
    {


        $column = 'prix_vende';
        $opt2 = "prix_louer_moin";
        $opt3 = "prix_louer_jour";

        if ($request->hasAny('categorie') && $request->hasAny('sorting')) {
            if ($request->categorie == 'rent_month') {
                $column = 'prix_louer_moin';
            } else if ($request->categorie == 'rent_day') {
                $column = 'prix_louer_jour';
            }
            if ($request->sorting == 'price_hight') {

                $maisons = Maison::where('status', "DESPONIBLE")
                    ->where($column, "<>", 0)
                    ->orderBy($column, 'desc')
                    ->paginate(12);
            } else if ($request->sorting == 'price_low') {

                $maisons = Maison::where('status', "DESPONIBLE")
                    ->where($column, "<>", 0)
                    ->orderBy($column, 'asc')
                    ->paginate(12);
            } else {
                $maisons = Maison::where('status', "DESPONIBLE")
                    ->where($column, "<>", 0)
                    ->orderBy('id', 'desc')
                    ->paginate(12);
            }
        } else if ($request->hasAny('categorie')) {
            if ($request->categorie == 'rent_month') {
                $column = 'prix_louer_moin';
            } else if ($request->categorie == 'rent_day') {
                $column = 'prix_louer_jour';
            }
            $maisons = Maison::where('status', "DESPONIBLE")
                ->where($column, "<>", 0)
                ->where($opt2, '=', 0)
                ->where($opt3, '=', 0)
                ->paginate(12);
        } else {
            $maisons = Maison::where('status', "DESPONIBLE")
                ->orderBy('id', 'desc')->paginate(12);
        }


        // $maisons = DB::table("maisons")
        // ->join('images')
        return view('maisons', compact('maisons'));
    }


    public function getMaison(Request $request)
    {
        $id = (int)$request->id;
        $maison = Maison::find($id);
        $maison_images = maison_images::where('id_maison', $id)->get();
        $maisons = Maison::where('status', "DESPONIBLE")->orderBy('id', 'desc')->limit(2)->get();
        if ($maison === NULL) {
            return abort(404);
        } else {
            return view("maison", compact(['maison', 'maison_images', 'maisons']));
        }


        // var_dump($validated);
    }
}
