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
<body style="background-image: url(<?php echo base_url(); ?>/public/img/fondo.jpg);"><br>
    <div class="container"><br>
		<div class="mx-auto rounded" style="width: 450px; background: #FFFFFF;">
      <h1 align="center">Login con Codeigniter</h1> <br>   
        <div class="form-group row">
        <div class="col">
          <img src="<?php echo base_url();?>/public/img/usuario.png" height="200" class="rounded mx-auto d-block" alt="..."> <br>
        </div>
          <div class="col-sm-9 mx-auto">
            <form action="<?php echo base_url('/login')?>" method="post">
                <div class="text-center">
                  <label for="usuario">Nombre</label>
                  <input type="text" name="usuario" id="usuario" required="" class="form-control text-center" placeholder="example@example.com">

                  <label for="password">Contraseña</label>
                  <input type="password"name="password" id="password" required="" class="form-control text-center" placeholder="*******"><br>
                  
                  <button class="btn btn-dark">Iniciar sesión</button><br>
                  <a href="<?php echo base_url('registro') ?>"><u>Registrarse</u></a><br>
                  </div>
              </form>
        </div>
		  </div><br>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>