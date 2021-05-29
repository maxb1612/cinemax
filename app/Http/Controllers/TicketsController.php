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
        return view('seats', ['taken' => $taken_seats, 'session_id' => $session_id]);
    }

    public function buyTickets(Request $request) {
        $user_id = Auth::user()->id;
        $seats = $request->input('seats');
        for ($i = 0; $i < sizeof($seats); $i++) {
            DB::table('tickets')->insert([
                'user_id' => $user_id,
                'session_id' => $request->input('session_id'),
                'seat' => $seats[$i]
            ]);
        }
        return redirect(route('tickets'));
    }

    public function showTickets() {
        if (!Auth::check()){
            return redirect(route('user.login'));
        }
        $user_id = Auth::user()->id;
        $tickets = DB::table('tickets')->join('sessions', 'session_id', '=', 'sessions.id')
            ->join('times', 'sessions.time_id', '=', 'times.id')
            ->join('movies', 'movie_id', '=', 'movies.id')
            ->where('user_id', $user_id)->get();
        return view('tickets', ['tickets' => $tickets]);
    }
}
