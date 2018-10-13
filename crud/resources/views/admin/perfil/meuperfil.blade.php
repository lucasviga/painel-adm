@extends('admin.noticias.template._site')

@section('dashboard')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Meu Perfil</li>
      </ol>
          
    <div class='card card-profile text-center'>
        <img alt='' class='card-img-top' src='https://unsplash.it/340/160?image=354'>
        <div class='card-block'>
            <img alt='' class='card-img-profile' 
                src='<?php echo asset('img/pp.jpeg')?>' style="width:165px;height:165px;">
            <h4 class='card-title'>
                    {{Auth::user()->name}}
            <small>Back-end developer</small>
            </h4>
            <div class='card-links'>
                <a class='fa fa-linkedin' href='#'></a>
                <a class='fa fa-instagram' target="_blank" href='https://www.instagram.com/lucassviga'></a>
                <a class='fa fa-github' target="_blank" href='https://www.github.com/lucasviga'></a>
            </div>

        </div>
    </div>
</div>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>

@endsection