<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create() {

        return view('auth.register');
    }

    public function store() {

        $this->validate(request(), [
            'name' => 'required|integer',
            'role'  => 'required|string',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        
        $user = User::create(request(['name', 'role', 'email', 'password']));

        if (auth()->login($user) == 'admin') {
            return view('admin.index');
        } else {
            return redirect()->to('/usuarios');
        }
    }
    public function registrar(Request $request) {

        $this->validate(request(), [
            'name' => 'required',
            'role'  => 'required|string',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        User::create(request(['name', 'role', 'email', 'password']));

        return redirect()->to('/usuarios')->with('success','Usuario agregado');

    }
}
