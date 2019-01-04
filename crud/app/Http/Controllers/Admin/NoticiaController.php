<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;
use Carbon\Carbon;
use DB;

class NoticiaController extends Controller
{
    public function index(){
        // $noti = DB::table ('noticias')
        // ->join ('users', 'noticias.user_id', '=', 'users.id')
        // ->select('noticias.id','users.name','noticias.titulo', 'noticias.subtitulo',  'noticias.imagem','noticias.created_at')
        // ->orderByRaw('noticias.created_at DESC')
        // ->get();

        $noti = DB::table ('noticias')
        ->join ('users', 'noticias.user_id', '=', 'users.id')
        ->select('noticias.id','users.name','noticias.titulo', 'noticias.subtitulo', 'noticias.descricao','noticias.imagem','noticias.created_at')
        ->orderBy('noticias.created_at', 'desc')
        ->paginate(3);

        return view('admin.noticias.index', compact('noti'));
    }

    public function mynews(Request $req){

        $search = $req->search;

        $my_noti = DB::table ('noticias')
        ->join ('users', 'noticias.user_id', '=', 'users.id')
        ->select('noticias.id','users.name','noticias.titulo', 'noticias.subtitulo')
        ->where('users.name', 'like', '%'.$search.'%')
        ->orderBy('noticias.id', 'ASC')
        ->get();

        return view('admin.noticias.mynews', compact('my_noti', 'search'));
    }

    public function adicionar(){

        return view('admin.noticias.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/noticias";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Noticia::create($dados);

        \Session::flash('mensagem_sucesso','Notícia cadastrada com sucesso!');

        return redirect()->route('admin.minhas.noticias');
    }

    public function editar($id){
        $registro = Noticia::find($id);

        return view ('admin.noticias.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/noticias";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Noticia::find($id)->update($dados);

        \Session::flash('mensagem_sucesso','Suas edições foram salvas com sucesso!');

        return redirect()->route('admin.minhas.noticias');
    }

    public function deletar($id){
        Noticia::find($id)->delete();

        \Session::flash('mensagem_sucesso','Notícia excluída com sucesso!');

        return redirect()->route('admin.minhas.noticias');
    }
}
