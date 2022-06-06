<?php
session_start();
  if (isset($_SESSION['email'])) {
    header('Location: /proyecto');
  }
  require 'connectBD.php';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
      $records = $conex->prepare('SELECT * FROM usuario WHERE email = :email');
      $records->bindParam(':email', $_POST['email']);
      $records->execute();
      $results = $records->fetch(PDO::FETCH_ASSOC);
      $filas= $records->rowCount();

      if($filas){
        $_SESSION['email'] = $results['email'];
        $_SESSION['rol'] = $results['rol'];
        header("Location: /proyecto");
      }else{
        $message = "Usuario o contraseña incorrectos";
        
      }
  }else{
    $message = "Rellene los campos";

  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
      
      h3{
        margin-top:0px;
      }
      a{
        font-weight:bold;
        color:black;
        position:relative;
        top:5%;
        margin-left:10%;
      }


    </style>
  </head>
  <body>
  <div class=divlog>
    <div class=mess>
    <h3><?php echo $message?></h3>
    <h1>Login</h1>
    </div>
    <form action="login.php" method="POST" class= formlog>
      <input name="email" type="text" class=inpform placeholder="Email">
      <input name="password" type="password" class=inpform placeholder="Contraseña">
      <input type="submit" class=submit value="Submit">
    </form>
    <a href="index.php">Inicio</a>
  </div>
  </body>
</html>