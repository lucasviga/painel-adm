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
        Mail::to('lucasviga12@mailtrapio.com')->send(new ContatoEmail($req));

        return redirect()->route('site.home');
    }
}
