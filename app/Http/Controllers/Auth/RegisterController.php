<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }


    public function store(Request $req){

        $req->validate([
            'name' => ['required','string','unique:users','min:3'],
            'email' => ['required','string','email','unique:users'],
            'password'=>['required','confirmed','min:8'],
            'username'=>['string']
        ]);

        $user = User::create([
            'name' => $req->name,
            'username' => $req->username,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'role_id' => 1
        ]);

        Auth::login($user);

        return redirect()->route(''); // TODO redirect to
    }
}
