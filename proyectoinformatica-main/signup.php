<?php

include "connectBD.php";

$message = '';
if (!empty($_POST['nombre']) && !empty($_POST['p_apellido']) && !empty($_POST['s_apellido']) &&!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuario (nombre, p_apellido, s_apellido,email, password, fecha_nacimiento, genero) VALUES (:nombre, :p_apellido, :s_apellido,:email, :password, :fecha_nacimiento, :genero)";
    $stmt = $conex->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':p_apellido', $_POST['p_apellido']);
    $stmt->bindParam(':s_apellido', $_POST['s_apellido']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':fecha_nacimiento', $_POST['fecha_nacimiento']);
    $stmt->bindParam(':genero', $_POST['genero']);
    

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }

?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <style>
            input{
                display: block;
                margin-top: 10px;
                height: 30px;
                width: 250px;
            }
            .div{
                margin-top: 10px;
                margin-right: 10px;
                font-size: 22px;
            }
            #genero{
                margin-top: 5px;
                height: 20px;
                width:150px
            }

        </style>
        <title>Register</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <?php if(!empty($message)): ?>
            <p> <?= $message ?></p>
        <?php endif; ?>
    <h1>REGISTRATE</h1>
        
    <form action ="signup.php" method="post">
        <div class="div">Nombre:</div>
        <input type="text" name="nombre" placeholder="NOMBRE">
        <div class="div">Apellidos:</div>
        <input type="text" name="p_apellido" placeholder="PRIMER APELLIDO">
        <input type="text" name="s_apellido" placeholder="SEGUNDO APELLIDO">
        <div class="div">Contraseña:</div>
        <input type="password" name="password" placeholder="CONTRASEÑA">
        <input type="password" name="cpassword" placeholder="CONFIRMAR CONTRASEÑA">
        <div class="div">Email:</div>
        <input type="text" name="email" placeholder="EMAIL">
        <div class="div">Fecha de Nacimiento:</div>
        <input type="date" name="fecha_nacimiento" value="2000-07-22" min="1900-01-01" max="2022-12-31">
        <div class="div">Género:</div>
        <select id="genero" name="genero">
            
            <option>Hombre</option>
            <option>Mujer</option>
            <option>Otro</option>>
          </select>
        
        <input type="submit" name="confirm">

    </form>
    <a href="index.php">Inicio</a>
    </body>
</html>
