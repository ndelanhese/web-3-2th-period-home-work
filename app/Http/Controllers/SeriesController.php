<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{

  public function create()
    {
      return view('series.create');  
    } 

  public function index(){
    $series = [
        "The good doctor",
        "Vikings",
        "Game of thrones"
    ];

   return view('series.index', compact('series'));
  
  }
}
