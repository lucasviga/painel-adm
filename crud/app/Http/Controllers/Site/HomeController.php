<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;

class HomeController extends Controller
{
    public function index(){
        $cardNoticia = Noticia::all();

        return view('home', compact('cardNoticia'));
    }
}
