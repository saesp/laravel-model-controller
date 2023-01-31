<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;

class MainController extends Controller
{
    public function index()
    {

        $movies = Movies::all();

        $data = [
            'movies' => $movies
        ];

        return view('pages.home', $data);
    }
}