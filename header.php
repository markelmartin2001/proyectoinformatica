<?php
   

    require 'connectBD.php';

    if (isset($_SESSION['email'])) {
    $records = $conex->prepare('SELECT email, password FROM usuario WHERE email = :email');
    $records->bindParam(':email', $_SESSION['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}

?>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+DW+Pica:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IM+Fell+DW+Pica:ital@1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@665&family=IM+Fell+DW+Pica:ital@1&family=Righteous&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
</head>

<header>

        
        <div style="max-width:5em; display: inline-block; position:absolute" ><img src="Pictures/publi.png" /></div>
        
        <ul class="primero">
       
        <img id="escudo" src="Pictures/escudo.png"> <p id="letra"> Jovellanos C.F</p>
         <?php if(!empty($user)): ?>
                <li><div id = usuario><?= $user['email']; ?></div></li>
                <li id = logout><a href="logout.php" id="logout">Logout</a></li>
            <?php else: ?>
                 <img id="imglog" src="Pictures/login.png"><li><a href="login.php" id="login"><h1>Login<h1></a></li>
                <li><a href="signup.php" id="regis"> <img id="escudo5" src="Pictures/escudob.png">Regístrate</a></li>
                
            <?php endif; ?>    
        </ul>
    
    <nav>
        

        <ul class="nav">
            <li><a href="index.php">Inicio</a></li>
            
            <li><a href="futbolMasculino.php">Fútbol Masculino</a>
                <ul>
                    <li><a href="">Primer Equipo</a></li>
                    <li><a href="">Cantera</a></li>
                    <li><a href="">Escuela</a></li>

            </li>
        </ul>
        </li>
        <li><a href="futbolFemenino.php">Fútbol Femenino</a>
            <ul>
                <li><a href="">Primer Equipo</a></li>
                <li><a href="">Cantera</a></li>
                <li><a href="">Escuela</a></li>

            </ul>
        </li>



        <li><a href="estadio.php">Estadio</a>

        </li>
        </ul>
        <ul class="derech">
            <li><a href="tienda.php">Tienda</a>
                <ul>
                    <li><a href="">Ropa hombre</a></li>
                    <li><a href="">Ropa mujer</a></li>
                </ul>
            </li>
            <li><a href="entradas.php">Entradas</a></li>
            <li><a href="">Tour</a></li>
            
        </ul>


    </nav>
    </header>