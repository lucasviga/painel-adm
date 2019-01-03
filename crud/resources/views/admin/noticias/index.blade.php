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
        <p>N de noticias: </p>
          <i class="fa fa-bell-o"></i> Notificações</div>
        @foreach($noti as $notificacao)
        <div class="list-group list-group-flush small">
          <a class="list-group-item list-group-item-action" href="#">
            <div class="media">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
              <div class="media-body">
                <strong>{{$notificacao->name}}</strong> postou uma nova notícia em www....         
                <div class="text-muted smaller">
                    há {{ Carbon\Carbon::parse($notificacao->created_at)->diffForHumans()}}
                </div>
              </div>
            </div>
          </a>        
        </div>
        @endforeach
        <div class="col-lg-12"> {{$noti->links()}} </div>
      </div>
    </div>

    </div> 
  </div>

@endsection