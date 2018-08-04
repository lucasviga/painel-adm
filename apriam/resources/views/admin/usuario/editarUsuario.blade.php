@extends('admin.noticias.template._site')

@section('dashboard')
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('admin.noticias')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Usuários</li>
      </ol>
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Editar Usuário</h1>
            <p class="lead"></p>
        </div>
    </div>
      
    <div class="row">
    <div class="col-lg-12">
        <form class="" action="{{route('admin.usuario.atualizar',$editarUsuario->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input class="form-control" id="name" name="name" type="text" aria-describedby="emailHelp"
                  value="{{isset($editarUsuario->name) ? $editarUsuario->name : ''}}" placeholder="digite nome do usuário" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar Alterações</button>
            <br><br>
        </form>
    </div>       
    </div>
      
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

@endsection