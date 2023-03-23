<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create(){
        return view('auth');
    }

    public function store(Request $request){

        $request->validate([
            'email' => ['required','string','email'],
            'password'=>['required','string'],
        ]);
        if(!Auth::attempt($request->only('email','password'),$request->boolean('remember'))){
            throw ValidationException::withMessages([
                'email'=> trans('auth.failed')
            ]);
        }
        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(){
        Auth::logout();
        return redirect(RouteServiceProvider::HOME);
    }
}
