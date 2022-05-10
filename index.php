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
 <img id="escudo4" src="Pictures/escudob.png">
    <p id="nombre2"></p>
    <p id="versus">VS</p>
    <img src="" alt="" id="img1" />
    <p id="nombre">Jovellanos C.F</p>

  </div>



    <div class="slide">
			<div class="slide-inner">
				<input class="slide-open" type="radio" id="slide-1" 
			 	     name="slide" aria-hidden="true" hidden="" checked="checked">
				<div class="slide-item">
        <div class="contenedor2">
 <img id="escudo4" src="Pictures/escudob.png">
    <p id="nombre2"></p>
    <p id="versus">VS</p>
    <img src="" alt="" id="img1" />
    <p id="nombre">Jovellanos C.F</p>

  </div>
				</div>
				<input class="slide-open" type="radio" id="slide-2" 
			 	     name="slide" aria-hidden="true" hidden="">
				<div class="slide-item">
					<img src="https://www.migueltroyano.com/wp-content/uploads/2020/09/postgres_copy.png">
				</div>
				<input class="slide-open" type="radio" id="slide-3" 
			 	     name="slide" aria-hidden="true" hidden="">
				<div class="slide-item">
					<img src="https://www.migueltroyano.com/wp-content/uploads/2020/09/excel_guardar_como_csv.jpg">
				</div>
				<label for="slide-3" class="slide-control prev control-1">‹</label>
				<label for="slide-2" class="slide-control next control-1">›</label>
				<label for="slide-1" class="slide-control prev control-2">‹</label>
				<label for="slide-3" class="slide-control next control-2">›</label>
				<label for="slide-2" class="slide-control prev control-3">‹</label>
				<label for="slide-1" class="slide-control next control-3">›</label>
				<ol class="slide-indicador">
					<li>
						<label for="slide-1" class="slide-circulo">•</label>
					</li>
					<li>
						<label for="slide-2" class="slide-circulo">•</label>
					</li>
					<li>
						<label for="slide-3" class="slide-circulo">•</label>
					</li>
				</ol>
			</div>
		</div>
</body>
  <script>
    
    let image = document.querySelector("#img1");
    let nombre = document.querySelector("#nombre2");
    let num = Math.floor((Math.random() * 80) + 1);


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
    
    mostrarEquipos(num,equipo1);
  
  
   

  </script>



</body>