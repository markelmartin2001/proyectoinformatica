<?php session_start();?>

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
    
<?php require 'header.php'?>


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