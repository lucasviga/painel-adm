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
                src='https://it.gravatar.com/userimage/3434071/205a00fc16ae537b26b56f40790910fe.jpg?size=140'>
            <h4 class='card-title'>
                    {{Auth::user()->name}}
            <small>Back-end developer</small>
            </h4>
            <div class='card-links'>
                <a class='fa fa-linkedin' href='#'></a>
                <a class='fa fa-twitter' href='#'></a>
                <a class='fa fa-facebook' href='#'></a>

                <form action="" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    
                    <div class="custom-file">
                        <input type="file" class="btn btn-outline-primary" id="" name="" required>                                   
                    </div>
                    
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>

@endsection