<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function index() {
        $users = User::all();

        return view('uzytkownicy.index', array(
            'users' => $users
        ));
    }

    public function pokaz($id) {

    }

    public function tworzenie() {
        return view('uzytkownicy.tworzenie');
    }

    public function tworzeniePost(Request $request) {
        $request->validate(array(
            'login' => 'unique:users'
        ));

        $user = User::create(array_merge(
            $request->all(),
            array(
                'password' => hash('sha256', $request->input('password')),
                'date_of_entry' => Carbon::now()
            )
        ));
        $user->save();

        return redirect('/admin/uzytkownicy');
    }

    public function edycja($id) {

    }

    public function edycjaPost($id, Request $request) {

    }

    public function usuwanie($id) {
        User::where('id_users', $id)
                ->delete();

        return redirect('/admin/uzytkownicy');
    }
}
