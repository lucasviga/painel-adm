<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\ContatoEmail;

class ContatoController extends Controller
{
    public function index(){
        return view ('contato');
    }

    public function sendEmail(Request $req){

        $this->validate($req,[
          'nome' => 'required|min:4|max:50',
          'email' => 'required|email',
          'mensagem' => 'required|min:4'
        ],[
          'nome.required' => 'Informe o seu nome',
          'email.required'=>'Preencha o campo email',
          'email.email'=>'Informe um email válido',
          'mensagem.required' => 'Digite a sua mensagem'
        ]);

        Mail::to('lucasviga12@mailtrapio.com')->send(new ContatoEmail($req));

        return redirect()->route('site.home');
    }
}
