@extends('admin.noticias.template._site')

@section('dashboard')
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Minhas Notícias</li>
      </ol>
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Minhas Notícias</h1>
            <a href="{{route('admin.noticias.adicionar')}}" 
                class="btn btn-outline-success" role="button" aria-pressed="true">
                Cadastrar Notícia
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
                <th scope="col">#</th>
                <th scope="col">Autor</th>
                <th scope="col">Título</th>
                <th scope="col">Subtítulo</th>
                <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse($noti as $registro)
                <tr>
                    <td>{{$registro->id}}</td>
                    <td>{{$registro->name}}</td>
                    <td>{{$registro->titulo}}</td>
                    <td>{{$registro->subtitulo}}</td>
                    <td>
                        
                    <a class="btn btn-outline-primary" href="{{route('admin.noticias.editar',$registro->id)}}" 
                        role="button">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
                    </a>

                    <a class="btn btn-danger" href="{{route('admin.noticias.deletar',$registro->id)}}" 
                        role="button">
                        <i class="fa fa-trash" aria-hidden="true" style="color:#fff;"></i> Apagar
                    </a>
                    </td>
                </tr>
                @empty
                    <div class="alert alert-warning">Nenhuma notícia cadastrada</div>
                @endforelse
            </tbody>
        </table>
        <br><br>
    </div>       
</div>
      
    </div>

@endsection

<!-- deletar Modal
<div class="modal fade" id="deleteNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">codExplorer | Painel</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body hidden">{{Auth::user()->name}}, Você quer apagar está notícia?</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Não</button>
            <a class="btn btn-primary" href="">Sim</a>
        </div>
        </div>
    </div>
</div>-->