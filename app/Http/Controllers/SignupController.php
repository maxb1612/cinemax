<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    public function save(Request $request) {
        if(Auth::check()){
            return redirect(route('user.private'));
        }

        $fields = [
            'phone' => $request->phone,
            'password' => $request->password
        ];

        if(User::where('phone', $fields['phone'])->exists()) {
            return redirect(route('user.signup'))->withErrors([
                'phone' => 'Номер уже зареєстровано'
            ]);
        }

        $user = User::create($fields);
        if($user) {
            Auth::login($user);
            return redirect(route('user.private'));
        }

        return redirect(route('user.signup'))->withErrors([
            'formError' => 'Помилка реєстрації'
        ]);
    }
}
