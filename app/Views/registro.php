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
<body style="background-image: url(<?php echo base_url(); ?>/public/img/fondo3.jpg);"><br>
    <div class="container"><br>
		<div class="mx-auto rounded" style="width: 450px; background: #FFFFFF;">
      <br><h2 align="center">Registro de  Usuarios</h2> <br>  
        <div class="form-group row">
        <div class="col">
          <div class="col-sm-9 mx-auto">
            <form action="<?php echo base_url('/registrar')?>" method="post">
                <div class="text-center">
                  <label for="usuario">Nombre</label>
                  <input type="text" name="usuario" id="usuario" required="" class="form-control text-center" placeholder="Guillermo">

                  <label for="paterno">Apellido Paterno</label>
                  <input type="text" name="paterno" id="paterno" required="" class="form-control text-center" placeholder="Hernández">

                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" required="" class="form-control text-center" placeholder="example@example.com">

                  <label for="Tipo">Tipo de usuario</label>
                  <input type="text" name="tipo" id="tipo" required="" class="form-control text-center" placeholder="General">

                  <label for="password">Contraseña</label>
                  <input type="password"name="password" id="password" required="" class="form-control text-center" placeholder="*******"><br>
                  <button class="btn btn-dark">Registrar</button><br>

                  <a href="<?php echo base_url() ?>"><u>Iniciar sesión</u>
                    </a>
                  </div>
              </form><br>
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