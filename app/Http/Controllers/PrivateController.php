<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class PrivateController extends Controller
{
    public function show() {
        $user = auth()->user();
        return view('private', ['user' => $user]);
    }

    public function updateUser(Request $request) {
        $user = Auth::user();

        DB::table('users')->where('phone', $user['phone'])->update([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email')
        ]);

        return redirect(route('user.private'));
    }

    public function updatePassword(Request $request) {
        $user = Auth::user();

        DB::table('users')->where('phone', $user['phone'])->update([
            'password' => Hash::make($request)
        ]);

        return redirect(route('user.private'));
    }
}
