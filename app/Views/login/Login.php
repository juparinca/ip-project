<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <div class="container">
      
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <br><br><br><br><br><br><br><br>
            
          <h1>Login</h1>
          <form action="<?php echo base_url('/login') ?>" method="POST">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" class="form-control" required="">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required="">
            <br>
            <button class="btn btn-primary">Entrar</button>
          </form>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>
    
  </body>
</html>