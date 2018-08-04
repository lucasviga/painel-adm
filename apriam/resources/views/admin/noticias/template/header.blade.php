<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>codExplorer | Painel</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo asset('admin/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo asset('admin/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo asset('admin/vendor/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo asset('admin/css/sb-admin.css')?>" rel="stylesheet">
  <link href="<?php echo asset('admin/css/perfil.css')?>" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- inicio menu lateral -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/">codExplorer</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{route('admin.noticias')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{route('admin.meuperfil')}}">
            <i class="fa fa-fw fa-user-circle-o"></i>
            <span class="nav-link-text">Perfil</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                <i class="fa fa-newspaper-o"></i>
              <span class="nav-link-text">Notícias</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
                <a href="{{route('admin.noticias.adicionar')}}">Nova Notícia</a>
              </li>
              <li>
                <a href="{{route('admin.minhas.noticias')}}">Minhas Notícias</a>
              </li>
            </ul>
          </li>       
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Configuração</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="{{route('admin.usuario.adicionar')}}">Novo Usuário</a>
            </li>
            <li>
              <a href="{{route('admin.usuario')}}">Usuário do Sistema</a>
            </li>
          </ul>
        </li>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link">
            <i class="fa fa-fw fa-user-circle-o"></i>{{Auth::user()->name}}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('site.login.sair')}}" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Sair
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- fim menu -->