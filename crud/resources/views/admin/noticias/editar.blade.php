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
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Editar Notícia</h1>
            <p class="lead"></p>
        </div>
    </div>
      
<div class="row">
<div class="col-lg-12">
    <form action="{{route('admin.noticias.atualizar',$registro->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
        @include('admin.noticias._form')
        <br><br>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        <br><br>
    </form>
</div>       
</div>
      
    </div>
@endsection