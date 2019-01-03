<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crud</title>

    <!-- icone navegador -->
    <link rel="shortcut icon" href="<?php echo asset('')?>" type="image/x-icon"/>

    <link rel="me" href="https://twitter.com/twitterdev">

    <link rel="canonical" href="/web/tweet-button">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo asset('vendor/assets/css/crud.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand title-menu" href="{{route('site.home')}}">Logo | Home</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle title-menu" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Drop
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
          <a class="dropdown-item title-menu" href="#">Item</a>
          <a class="dropdown-item title-menu" href="#">Item</a>
        </div>
      </li>

      <li class="nav-item">
        <a href="{{route('site.contato')}}" class="nav-link title-menu" href="#">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link title-menu" href="#">Item | </a>
      </li>     
      @if(Auth::guest())
        <a href="/login"><button type="button" class="btn btn-outline-primary">Entrar</button></a>
      @else
        <li class="nav-item">
          <a href="{{route('admin.noticias')}}" class="btn btn-outline-primary">{{Auth::user()->name}}</a>
        </li>  
      @endif    
    </ul>
    </div>
  </div>
</nav>

    <!--<header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">-->
          <!-- Slide One - Set the background image for this slide in the line below -->
         <!-- <div class="carousel-item active" style="background-image: url('')">
            <div class="carousel-caption d-none d-md-block">
            
            </div>
          </div>-->
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <!--
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>-->
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <!--
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>-->
      <!--  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>-->
 
    </br></br></br>