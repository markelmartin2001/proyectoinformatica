<?php
    session_start();

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
<!doctype html>
<html lang="es">

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
</head>

<body>
    <header>

        <div class="publi">
            <img src="Pictures/publi.jpg" />
        </div>
        <ul class="primero">
            <?php if(!empty($user)): ?>
                <li><div id = usuario><?= $user['email']; ?></div></li>
                <li id = logout><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="signup.php">Regístrate</a></li>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>    
            <li><a href="">Idioma</a>
                <ul>
                    <li><a href="">Español</a></li>
                    <li><a href="">Inglés</a></li>
                </ul></li>
        </ul>
    </header>
    <nav>
        <img id="escudo" src="Pictures/escudo.png">
        <p id="letra">Jovellanos C.F</p>

        <ul class="nav">
            <li><a href="">Inicio</a></li>
            <li><a href="">Fútbol Masculino</a>
                <ul>
                    <li><a href="">Primer Equipo</a></li>
                    <li><a href="">Cantera</a></li>
                    <li><a href="">Escuela</a></li>

            </li>
        </ul>
        </li>
        <li><a href="">Fútbol Femenino</a>
            <ul>
                <li><a href="">Primer Equipo</a></li>
                <li><a href="">Cantera</a></li>
                <li><a href="">Escuela</a></li>

            </ul>
        </li>



        <li><a href="">Estadio</a>

        </li>
        </ul>
        <ul class="derech">
            <li><a href="">Tienda</a>
                <ul>
                    <li><a href="">Ropa hombre</a></li>
                    <li><a href="">Ropa mujer</a></li>
                </ul>
            </li>
            <li><a href="">Entradas</a></li>
            <li><a href="">Tour</a></li>
            
        </ul>

    </nav>
    <div class="contenedor">
        <a href=""><div id="foto1"><img src="Pictures/inicio1.jpg">
    <p id="titulofoto">Remontada sufrida contra el colista </p> <br> <p id="marcador"><img id="escudo3" src="Pictures/Aguilas.png">1-2<img id="escudo2" src="Pictures/escudob.png"> </p>
    </div>
    </div></a>
 <noticias>
     <p id="noticias">Noticias</p>
 </noticias>
 




 <div class="contenedor2">
    <img src="" alt="" id="img1" />
    <p id="nombre"></p>
    <p id="versus">VS</p>
    <img id="escudo4" src="Pictures/escudob.png">
    <p id="nombre2">Jovellanos C.F</p>

  </div>
  </body>
  <script>
    let image = document.querySelector("#img1");
    let nombre = document.querySelector("#nombre");
    

    function equipo1(logo,nombreEquipo){
      image.setAttribute("src",logo);
      nombre.innerHTML = nombreEquipo;
    }
   
    
    let key = "2c6e53892b4fd81a84173e6497aecc629135c4a2003d6dd8ba8edf90a02f0d3a";
    function mostrarEquipos(idEquipo,fucionEquipo){

    fetch(`https://allsportsapi.com/api/football/?&met=Teams&teamId=${idEquipo}&APIkey=${key}`)
    .then(response =>response.json())
    .then((equipos) => {
      fucionEquipo(
      equipos.result[0].team_logo,
      equipos.result[0].team_name)
    });
    }
    
    mostrarEquipos(1340,equipo1);
    
   

  </script>



</body>