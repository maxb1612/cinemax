<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index(){
        $movies = DB::table('movies')->get();
        return view('index', ['movies' => $movies]);
    }

    public function movie($movie_id) {
        $movie = DB::table('movies')->where('id', $movie_id)->get();
        $sessions = DB::table('times')
            ->join('sessions', 'sessions.time_id', '=', 'times.id')
            ->where('movie_id', $movie_id)
            ->get();
        return view('movie', ['movie' => $movie, 'sessions' => $sessions]);
    }
}
