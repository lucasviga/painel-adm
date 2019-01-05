@extends('admin.noticias.template._site')

@section('dashboard')
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('admin.noticias')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Inserir</li>
      </ol>
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Adicionar Notícia</h1>
            <p class="lead"></p>
        </div>
    </div>
      
    <div class="row">
    <div class="col-lg-12">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
        @endif
    </div>
    <div class="col-lg-12">
        <form action="{{route('admin.noticias.salvar')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            
            @include('admin.noticias._form')

            <br><br>

            <button type="submit" class="btn btn-primary">Adicionar</button>
            <br><br>
        </form>
    </div>       
    </div>
      
    </div>


@endsection