<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MyController extends Controller
{
    public function index() {

        $datiMovie = Movie::all();

        $datiView = [
            "moviesList" => $datiMovie
        ];

        return view("homepage", $datiView);
    }
}
