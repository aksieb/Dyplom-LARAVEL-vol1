<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class ProductController extends Controller
{
    public function index() {
        $product = Product::all();

        return view('produkty.index', array(
            'product' => $product
        ));
    }

    public function tworzenie() {
        return view('produkty.tworzenie');
    }

    public function tworzeniePost(Request $request) {
        $request->validate(array(
            'name' => 'unique:product',
            'description' => 'product'
        ));


        $product->save();

        return redirect('/produkty');
    }
}
