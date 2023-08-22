<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class HomeController extends Controller
{
  public function index()
  {
    $movies = Movie::all();
    return view('home', compact('movies'));
  }

  public function show($id)
  {
    $movie = Movie::find($id);
    if (!$movie) abort(404);
    return view('show', compact('movie'));
  }
}
