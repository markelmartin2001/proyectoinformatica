<?php

  session_start();

  if (isset($_SESSION['email'])) {
    header('Location: /proyecto');
  }
  require 'connectBD.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conex->prepare('SELECT email, password FROM usuario WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['email'] = $results['email'];
      header("Location: /proyecto");
    } else {
      $message = 'Algun campo esta mal';
    }
  }

?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>


    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>

    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Email">
      <input name="password" type="password" placeholder="Contraseña">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
    </body>
</html>