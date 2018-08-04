@extends('layout.site')

@section('content')
    <!--==================== Conteudo da Pagina ========================= -->
    <div class="container">

    <!-- /.row -->

    <!-- Portfolio Section -->
    <div class="row">
        <!-- inicio card noticia -->
        @foreach($cardNoticia as $noticia)
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="noticias/future-isp-2018.html">
                    <img class="card-img-top" src="{{asset($noticia->imagem)}}" alt="{{$noticia->titulo}}">
                </a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="noticias/future-isp-2018.html">{{$noticia->titulo}}</a>
                </h4>

                <p class="card-text">{{$noticia->descricao}}</p>
                
                <a href="noticias/future-isp-2018.html" class="btn btn-primary">Leia mais</a>
            </div>
            <div class="card-footer">
                <iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.apriam.org.br%2Fnoticias%2Ffuture-isp-2018.html&width=141&layout=button&action=like&size=small&show_faces=false&share=true&height=65&appId" width="141" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>                     
            </div>
            </div>
        </div>
        @endforeach
        <!-- fim card noticia -->
   
    </div>
    <!-- /.row -->
    </br></br></br>
        <!-- Membros da diretoria apriam -->
    <h2>Nossa Diretoria</h2>
    <hr>
    <div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
        <img class="card-img-top" src="<?php echo asset('img/presidente-neilson.png')?>" alt="neilson-presidente">
        <div class="card-body">
            <h4 class="card-title">Neilson Reis</h4>
            <h6 class="card-subtitle mb-2 text-muted">Presidente</h6>            
        </div>
        <div class="card-footer">
            <a href="#"></a>
        </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
        <img class="card-img-top" src="<?php echo asset('img/vicepresidente-maykon.jpg')?>" width="750px" alt="maykon-vice-presidente">
        <div class="card-body">
            <h4 class="card-title">Maykon Souza</h4>
            <h6 class="card-subtitle mb-2 text-muted">Vice Presidente</h6>
        </div>
        <div class="card-footer">
            <a href="#"></a>
        </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
        <img class="card-img-top" src="<?php echo asset('img/branco.jpg')?>" alt="jander-tesoureiro">
        <div class="card-body">
            <h4 class="card-title">Jander Fortes Lima</h4>
            <h6 class="card-subtitle mb-2 text-muted">Tesoureiro</h6>
        </div>
        <div class="card-footer">
            <a href="#"></a>
        </div>
        </div>
    </div>
    </div>

    </br></br></br>

    <h2>Provedores</h2>
    <hr>
    <div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
        <img class="card-img-top" src="img/provedores/fiber-logo.jpg" alt="fiber-logo">
        
        <div class="card-footer">
            <a href="http://www.fibernetwork.com.br/">FiberNetwork</a>
        </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
        <img class="card-img-top" src="img/provedores/intlink-logo.jpg" alt="intlink-logo">
        
        <div class="card-footer">
            <a href="http://www.intlink.com.br/">Intlink</a>
        </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
        <img class="card-img-top" src="img/provedores/provweb-logo.jpg" alt="provweb-logo">
        
        <div class="card-footer">
            <a href="http://www.provweb.com.br/">ProvWeb Internet</a>
        </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
        <img class="card-img-top" src="img/provedores/padrao-system-logo.jpg" alt="padrao-system-logo">
        
        <div class="card-footer">
            <a href="http://www.padraosystem.com.br/">Padrão System Telecom</a>
        </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
        <img class="card-img-top" src="img/provedores/xtreme-logo.jpg" alt="Xtreme-logo">
        
        <div class="card-footer">
            <a href="http://www.xtremenet.com.br/">Xtreme</a>
        </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
        <img class="card-img-top" src="img/provedores/esolution.jpg" alt="esolution-logo">
        
        <div class="card-footer">
            <a href="http://www.esolution.srv.br">Esolution</a>
        </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
        <img class="card-img-top" src="img/provedores/icom-logo.jpg" alt="icom-logo">
        
        <div class="card-footer">
            <a href="http://www.icomtelecom.com.br">iCOM Telecom</a>
        </div>
        </div>
    </div>
    </div>
      

    </div>
    <!-- /.container -->
@endsection