@extends('layout.site')

@section('content')
    <!--==================== Conteudo da Pagina ========================= -->
    <div class="container">

    <!-- /.row -->

    <!-- Portfolio Section -->
    <div class="row">
        <!-- inicio card noticia -->
        @foreach($noti as $noticia)
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="{{route('site.ler.noticias',$noticia->id)}}">
                    <img class="card-img-top" src="{{asset($noticia->imagem)}}" alt="{{$noticia->titulo}}">
                </a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{route('site.ler.noticias',$noticia->id)}}">{{$noticia->titulo}}</a>
                    </h4>

                    <p class="card-text">{{$noticia->descricao}}</p>                    
                    <a href="{{route('site.ler.noticias',$noticia->id)}}" class="btn btn-primary">Leia mais</a>
                </div>
                <div class="card-footer">
                    <p>{{$noticia->name}} postou há {{ Carbon\Carbon::parse($noticia->created_at)->diffForHumans()}}</p>
                    <iframe src="" width="141" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>                     
                </div>
            </div>
        </div>
        @endforeach
        <!-- fim card noticia -->

        <div class="col-lg-12" align="center">
            {{$noti->links()}}
        </div>
   
    </div>
    <!-- /.row -->
    </br></br></br>
            
    </div>
      

    </div>
    <!-- /.container -->
@endsection