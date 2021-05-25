<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TicketsController extends Controller
{
    public function getSeats(Request $request) {
        if (!Auth::check()){
            return redirect(route('user.login'));
        }
        $session_id = $request->input('session_id');
        $taken_seats = DB::table('tickets')->where('session_id', $session_id)->get();
        return view('seats', ['taken' => $taken_seats]);
    }

    public function buyTickets(Request $request) {
        
        return redirect(route('tickets'));
    }

    public function showTickets() {
        if (!Auth::check()){
            return redirect(route('user.login'));
        }
        $user_id = Auth::user()->id;
        $tickets = DB::table('tickets')->join('sessions', 'session_id', '=', 'id')
            ->join('times', 'sessions.time_id', '=', 'times.id')
            ->where('user_id', $user_id)->get();
        return view('tickets', ['tickets' => $tickets]);
    }
}
