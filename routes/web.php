<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/uzytkownicy', array(
        UserController::class, 'index'
    ));

    Route::get('/uzytkownik', array(
        UserController::class, 'tworzenie'
    ));

    Route::post('/uzytkownik', array(
        UserController::class, 'tworzeniePost'
    ));

    Route::get('/usun_uzytkownika/{id}', array(
        UserController::class, 'usuwanie'
    ));

    Route::get('/kategorie', array(
        CategoryController::class, 'index'
    ));

    Route::get('/kategorie', array(
        CategoryController::class, 'tworzenie'
    ));

    Route::post('/kategorie', array(
        CategoryController::class, 'tworzeniePost'
    ));

    Route::get('/produkty', array(
        ProductController::class, 'index'
    ));

    Route::get('/produkty', array(
        ProductController::class, 'tworzenie'
    ));

    Route::post('/produkty', array(
        ProductController::class, 'tworzeniePost'
    ));

    Auth::routes();
});

/*
Route::get('/users', function(Request $request) {
    $user = new User();
    $user->login = 'testowy2';
    $user->password = '';
    $user->first_name = 'Tadeusz';
    $user->surname = 'Maciaszek';
    $user->date_of_entry = Carbon::now();
    $user->email = 'test@test.pl';
    $user->save();

    $user = User::create($request->all());
    $user->save();

    // SELECT * FROM `users` WHERE (`login` = '' AND `surname` = '') OR `password` = '';
    User::where(function($query) {
            $query->where()
                ->where();
        })
        ->orWhere()
        ->delete();

    $user = User::where('login', "Like", '%test%')
                ->update(array(
                    'first_name'    => "Zuzia"
                ));

    return User::all();
});

Route::get('/category', function() {
    $category = Category::with('user')
        ->get();

    foreach($category as $c) {
        echo $c->user->password . '<br />';
    }

    //return $category;
});
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
