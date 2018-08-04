@extends('admin.noticias.template._site')

@section('dashboard')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Meu Painel</li>
    </ol>

  <div class="row">

    <div class="col-lg-12">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-bell-o"></i> Notificações</div>
        @foreach($noticias as $notificacao)
        <div class="list-group list-group-flush small">
          <a class="list-group-item list-group-item-action" href="#">
            <div class="media">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
              <div class="media-body">
                <strong>{{Auth::user()->name}}</strong> postou uma nova notícia em apriam.org.br          
                <div class="text-muted smaller">
                    em {{ date( 'd/m/Y' , strtotime($notificacao->created_at))}} 
                    às {{ date('H:i',strtotime($notificacao->created_at))}}
                </div>
              </div>
            </div>
          </a>        
        </div>
        @endforeach
        <div class="col-lg-12"></div>
      </div>
    </div>

    <div class="col-lg-12">
      <div class="mb-0 mt-4">
        <i class="fa fa-newspaper-o"></i> Feed Notícias
      </div>
      <hr class="mt-2">
      <div class="card-deck">
        @forelse($noticias as $noticia)
        <div class="card">
          <img class="card-img-top" src="{{asset($noticia->imagem)}}" alt="{{$noticia->titulo}}">
          <div class="card-body">
            <h5 class="card-title">{{$noticia->titulo}}</h5>
            <p class="card-text">{{$noticia->subtitulo}}</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">
              postado em {{ date( 'd/m/Y' , strtotime($noticia->created_at))}} 
              às {{ date('H:i',strtotime($noticia->created_at))}} 
            </small>
          </div>
        </div>
        @empty
          <div class="alert alert-warning">Nenhuma notícia cadastrada!</div>
        @endforelse
      </div>
      <br><br>
    </div>

    </div>
      
    </div>

@endsection