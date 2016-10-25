<?php
  session_start();

  if (isset($_SESSION['username'])) {
      session_start();
      session_destroy();
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Registrate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>

  <body>
  <?php include './header.php'; ?>
    <div class="container">

      <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
        <h2 class="form-signup-heading text-center">Registrate<br><small>Si eres nuevo registrate aqui</small></br></h2>
        <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Nombre de Usuario" autofocus>
        <input name="email" id="email" type="text" class="form-control" placeholder="Correo">
<br>
        <input name="password1" id="password1" type="password" class="form-control" placeholder="Contraseña">
        <input name="password2" id="password2" type="password" class="form-control" placeholder="Confirmar Contraseña">

        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Registrate</button>
        <a href="./main_login.php" name="Submit" id="submit" class="btn btn-lg btn-success btn-block" type="submit">Inciar Sesion</a>

        <div id="message"></div>
      </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script src="js/signup.js"></script>


    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>

$( "#usersignup" ).validate({
  rules: {
	email: {
		email: true,
		required: true
	},
    password1: {
      required: true,
      minlength: 4
	},
    password2: {
      equalTo: "#password1"
    }
  }
});
</script>

  </body>
</html>
