<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;
use Carbon\Carbon;
use DB;

class HomeController extends Controller
{
    public function index(){

        $noti = DB::table ('noticias')
        ->join ('users', 'noticias.user_id', '=', 'users.id')
        ->select('noticias.id','users.name','noticias.titulo', 'noticias.subtitulo', 'noticias.descricao','noticias.imagem','noticias.created_at')
        ->orderBy('noticias.created_at', 'desc')
        ->paginate(6);

        // $order = Noticia::orderBy('noticias.created_at', 'desc')->paginate(6);

        return view('home', compact('noti'));
    }

    public function lerNoticias($id){
        // $noti_join = DB::table ('noticias')
        // ->join ('users', 'noticias.user_id', '=', 'users.id')
        // ->select('noticias.id','users.name','noticias.titulo', 'noticias.subtitulo', 'noticias.descricao', 'noticias.corpoNoticia', 'noticias.imagem', 'noticias.created_at')
        // ->get();
        
        $noti_join = Noticia::find($id);
        return view ('lerNoticia', compact('noti_join'));
    }

}
