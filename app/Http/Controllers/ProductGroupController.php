<?php

namespace App\Http\Controllers;

use App\Models\ProductGroup;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class ProductGroupController extends Controller
{
    public function index() {
        $product_group = ProductGroup::all();

        return view('podprodukty.index', array(
            'product_group' => $product_group
        ));
    }

    public function tworzenie() {
        return view('podprodukty.tworzenie');
    }

    public function tworzeniePost(Request $request) {
        $request->validate(array(
            'name' => 'unique:product_group',
            'description' => 'product_group'
        ));



       // $product_group->save();

        return redirect('/podprodukty');
    }
}
