@extends('admin.noticias.template._site')

@section('dashboard')
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Meus Usuários</li>
      </ol>
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Usuários cadastrados</h1>
            <a href="{{route('admin.usuario.adicionar')}}" 
                class="btn btn-outline-success" role="button" aria-pressed="true">
                Novo Usuário
            </a>
        </div>
    </div>
      
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('mensagem_sucesso'))
            <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
        @endif
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Usuário</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($verUsuario as $usuario)
                <tr>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>
                        <a class="btn btn-outline-primary" href="{{route('admin.usuario.editar',$usuario->id)}}" role="button">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                        <a class="btn btn-danger" href="{{route('admin.usuario.deletar',$usuario->id)}}" role="button">
                            <i class="fa fa-trash" aria-hidden="true" style="color:#fff;"></i> Apagar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
    </div>       
</div>
      
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

@endsection