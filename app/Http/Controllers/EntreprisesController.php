<?php

namespace App\Http\Controllers;

use App\Models\Entreprises;
use Illuminate\Http\Request;

class EntreprisesController extends Controller
{
    public function index()
    {

        $first = app('rinvex.categories.category')::where('slug','export')->first();
        $cats = app('rinvex.categories.category')->descendantsOf($first)->toTree();

        $entreprises = Entreprises::all();

        return view('export.index',['cats'=>$cats,'entreprises'=>$entreprises]);
      //  return json_encode($first) ;
    }

    public function show($id)
    {
        $entreprises= Entreprises::find($id) ;

        // echo json_encode($opps) ;
        return view('other.entreprises.show',['entreprise'=>$entreprises]) ;
    }

    public function filterByCAt($catid)
    {
        $cat_arry[] =+ $catid ;


        $first = app('rinvex.categories.category')::where('slug','export')->first();
        $cats = app('rinvex.categories.category')->descendantsOf($first)->toTree();

        $entreprises =Entreprises::withCategories($cat_arry)->get();

        return view('export.index',['cats'=>$cats,'entreprises'=>$entreprises]);


    }
}
