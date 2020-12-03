<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class CategoryController extends Controller
{
    public function index() {
        $category = Category::all();

        return view('kategorie.index', array(
            'category' => $category
        ));
    }

    public function tworzenie() {
        return view('kategorie.tworzenie');
    }

    public function tworzeniePost(Request $request) {
        $request->validate(array(
            'name' => 'unique:category'
        ));


        $category->save();

        return redirect('/kategorie');
    }
}
