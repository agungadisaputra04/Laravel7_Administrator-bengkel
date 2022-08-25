
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="vendor/adminlte/dist/img/agung.png">

    <title>Login Admin Bengkel</title>
    

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <form class="form-signin" form action="{{ url('/login') }}" method="post">
  <body class="text-center">
    
      
        {{ csrf_field() }}
      <img class="mb-4" src="vendor/adminlte/dist/img/agung.png" alt="" width="125" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
     
      <input type="text" class="form-control" name="email" placeholder="ini email" >
      
      <input type="password" name="password" class="form-control" placeholder="ini Password">
      
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Ingatkan Saya
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block"  value="login" type="submit">Masuk</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021 </p>
      
    </form>
  </body>
</html>