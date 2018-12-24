<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;
use DB;

class HomeController extends Controller
{
    public function index(){
        $noti = DB::table ('noticias')
        ->join ('users', 'noticias.user_id', '=', 'users.id')
        ->select('noticias.id','users.name','noticias.titulo', 'noticias.subtitulo', 'noticias.descricao','noticias.imagem','noticias.created_at')
        ->orderByRaw('noticias.created_at DESC')
        ->get();

        return view('home', compact('noti'));
    }
}
