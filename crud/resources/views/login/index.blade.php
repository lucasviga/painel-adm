<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login - codExplorer</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo asset('admin/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo asset('admin/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo asset('admin/css/sb-admin.css')?>" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Entrar</div>
      <div class="card-body">
        @if(count($errors) > 0)
          <div class="alert alert-warning">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif
      <form class="" action="{{route('site.login.entrar')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></div>
              </div>
              <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{old('email')}}">
            </div>
          </div>

          <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></div>
                </div>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="senha" value="{{old('senha')}}">
              </div>
            </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html"></a>
          <a class="d-block small" href="forgot-password.html">Esqueceu sua senha?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo asset('admin/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo asset('admin/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
</body>

</html>
