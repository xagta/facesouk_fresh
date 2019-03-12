<?php

namespace App\Http\Controllers;

use App\Models\Artisant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtisantController extends Controller
{

    public function index()
    {

        $first = app('rinvex.categories.category')::where('slug', 'artisanat')->first();
        $cats = app('rinvex.categories.category')->descendantsOf($first)->toTree();

        $artisants = Artisant::all();

        return view('artisanat.index', ['cats' => $cats, 'artisants' => $artisants]);


    }


    public function show($id)
    {
        $artisant = Artisant::find(1)->load('products');


        return view('artisanat.showproducts', ['artisant' => $artisant]);

    }

    public function search(Request $request)
    {

        $cat = $request->get('category');

        $first = app('rinvex.categories.category')::where('slug', $cat)->first();


        $artisants = Artisant::withAnyCategories($first)->with('products')->get();
        // $artisants = $first->entries(\App\Models\Artisant::class)->load('products');


        $products = $artisants->pluck('products')->first();


        $output = "";

        if ($products) {
            foreach ($products as $key => $product) {
                $output .= '<tr>' .
                    '<td>' . $product->name . '</td>' .
                    '<td>' . $product->image_url . '</td>' .
                    '</tr>';
            }
        }


        return $output;

    }

}
