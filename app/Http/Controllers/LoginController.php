<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        if (Auth::check()){
            return redirect()->intended(route('user.private'));
        }
        $fields = $request->only(['phone', 'password']);

        if(Auth::attempt($fields)) {
            return redirect()->intended(route('user.private'));
        }

        return redirect(route('user.login'))->withErrors([
            'password' => 'Невірний номер або пароль'
        ]);
    }
}
