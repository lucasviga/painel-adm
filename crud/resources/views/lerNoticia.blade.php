@extends('layout.site')

@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">{{$noti_join->titulo}} 
      <small></small>
    </h1>
  
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{route('site.home')}}">Apriam | Home</a>
      </li>
      <li class="breadcrumb-item active">Notícias</li>
    </ol>
  
    <div class="row">
  
      <!-- Post Content Column -->
      <div class="col-lg-8 text-style">
        
        <p class="lead"><b>Autor:  {{$noti_join->name}}</b>, criado em {{ date( 'd/m/Y' , strtotime($noti_join->created_at))}}</p>
        <small>atualizado em {{ date( 'd/m/Y' , strtotime($noti_join->updated_at))}}</small>
        <br>
        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{asset($noti_join->imagem)}}" 
          alt="Evento ISP RoadTech"> 
        <hr>
        <!-- Post Content -->
  
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{$noti_join->titulo}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">15-18 de Outubro | São Paulo</h6>
            <p class="card-text">{{$noti_join->subtitulo}}</p>
            <a href="#" class="card-link">Sobre o Evento</a>
            <a href="#" class="card-link">+ Info</a>
          </div>
        </div>
        <br>
        
        <p>{{$noti_join->descricao}}</p>

        <p>{{$noti_join->corpoNoticia}}</p>
  
        <hr>
      </div>
  
      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
  
        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Curta nossa Fan Page</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fapriamorg%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="310" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
              </div>
    
            </div>
          </div>
        </div>
  
      </div>
  
    </div>
    <!-- /.row -->
  
  </div>
@endsection