<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/styles.css">
        <title>Login--Hann</title>
    </head>
    <body>
        <div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Account Login</h1>
    </div>
    <div class="form-content">
      <form id="form" method="POST">
      <?php
      if (isset($errorLogin)) {
        echo $errorLogin;
      }

      if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $pass = $_POST['password'];

        $campos = array();

        if ($username == '') {
          array_push($campos, "El campo nombre no puede estar vacío...");
        }
        if ($pass == '' ){
          array_push($campos, "El campo password no puede estar vacio");
        }
        if (count($campos) > 0) {
          echo "<div class='error'>";
          for($i = 0; $i < count($campos); $i++){
            echo "<li>".$campos[$i]."</li></div>";
          }
        }else {
          echo "<div class='correcto'>Datos Correctos</div>";
        }
      }
      ?>
        <div class="form-group">
          <label for="username">Username</label>
          <input id="username" type="text" name="username"/>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input id="password" type="password" name="password" id="password"/>
        </div>
        <div class="form-group">
          <label class="form-remember">
            <input type="checkbox"/>Remember Me
          </label><a class="form-recovery" href="vistas/register.php">Registrarte</a>
        </div>
        <div class="form-group">
          <button type="submit" id="btnSubmit" >Log In</button>
        </div>
      </form>
    </div>
  </div>
  <div class="form-panel two">
    <div class="form-header">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="assets/app.js"></script>
    </body>
</html>