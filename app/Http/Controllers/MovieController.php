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

    public function movie($id) {
        $movie = DB::table('movies')->where('id', $id)->get();
        $sessions = DB::table('sessions')
            ->join('times', 'sessions.time_id', '=', 'times.id')->where('movie_id', $id)
            ->get();
        return view('movie', ['movie' => $movie, 'sessions' => $sessions]);
    }
}
