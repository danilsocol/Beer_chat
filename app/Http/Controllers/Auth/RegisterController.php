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
        return view('reg');
    }

    public function store(Request $req){

        $req->validate([
            'name' => ['required','string','unique:users','min:3'],
            'email' => ['required','string','email','unique:users'],
            'password'=>['required','confirmed','min:8'],
            'username'=>['string']
        ]);

        $user = User::create([
            'name' => $req->nickname,
            'username' => $req->username,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        Auth::login($user);

        return redirect()->route('');
    }
}
