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
        header("Location: /proyecto");
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }

?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
        <style>

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

      h1{
        margin-top:0px;
      }

      a{
        font-weight:bold;
        color:black;
        position:relative;
        top:5%;
        margin-left:10%;
      }

      .divlog{
          top:10%;
          height:80%;
      }

      .formlog{
        height: 80%;
      }

      .submit{
        background:white;
        height:5%;
        width:20%;
        border-radius:5px;
        }

        #genero{
            margin:0px;
        }
        </style>
        <title>Register</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
    <div class=divlog>
        <?php if(!empty($message)): ?>
            <p> <?= $message ?></p>
        <?php endif; ?>
    
        <div class=mess>
            <h1>REGISTRATE</h1>
    </div>
    <form action ="signup.php" method="post" class= formlog>
        
        <input type="text" name="nombre" placeholder="NOMBRE" class=inpform>
        
        <input type="text" name="p_apellido" class=inpform placeholder="PRIMER APELLIDO">
        <input type="text" name="s_apellido" class=inpform placeholder="SEGUNDO APELLIDO">
        
        <input type="password" name="password" class=inpform  placeholder="CONTRASEÑA">
        <input type="password" name="cpassword" class=inpform placeholder="CONFIRMAR CONTRASEÑA">

        <input type="text" name="email" class=inpform placeholder="EMAIL">
        
        <input type="date" name="fecha_nacimiento" class="inpform" value="2000-07-22" min="1900-01-01" max="2022-12-31">
        
        <select id="genero" name="genero" class="sel" required>
            <option value="" hidden>Género</option>
            <option>Hombre</option>
            <option>Mujer</option>
            <option>Otro</option>>
          </select>
        
        <input type="submit" class=submit name="confirm">

    </form>
    <a href="index.php">Inicio</a>
    </div>
    </body>
    
</html>
