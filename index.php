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
<style>

.slide{
 
padding:10%;
	width:21.5em;
	height:12.3em;
	background-image: linear-gradient(180deg,#234333 0,rgba(24,23,51,0) 10%,rgba(24,23,51,0),80%,#181733);
  background-color:red;
}
#video{
  margin-top:41%;

}

#video2{
  margin-top:19%;
}

  </style>


<body>

<?php require 'header.php'?>

<div class="contenedores">
    <div class="contenedor" >
        <a href=""><div id="foto1"><img src="Pictures/inicio1.jpg">
    <p id="titulofoto">Remontada sufrida contra el colista </p> <br> <p id="marcador"><img id="escudo3" src="Pictures/Aguilas.png">1-2<img id="escudo2" src="Pictures/escudob.png"> </p>
    </div>
    </div></a>
    <div class="fixed-leftSd">

 <div id="video"><video width="390" height="240" autoplay loop muted>
        <source src="pictures/anuncio.mp4" type="video/mp4">
       
</video>
<div class="slide">
			<div class="slide-inner">
				<input class="slide-open" type="radio" id="slide-1" 
			 	     name="slide" aria-hidden="true" hidden="" checked="checked">
				<div class="slide-item">
					<img src="pictures/partido1.png">
				</div>
				<input class="slide-open" type="radio" id="slide-2" 
			 	     name="slide" aria-hidden="true" hidden="">
				<div class="slide-item">
					<img src="pictures/partido2.png">
				</div>
				<input class="slide-open" type="radio" id="slide-3" 
			 	     name="slide" aria-hidden="true" hidden="">
				<div class="slide-item">
					<img src="pictures/partido3.png">
				</div>
				<label for="slide-3" class="slide-control prev control-1">‹</label>
				<label for="slide-2" class="slide-control next control-1">›</label>
				<label for="slide-1" class="slide-control prev control-2">‹</label>
				<label for="slide-3" class="slide-control next control-2">›</label>
				<label for="slide-2" class="slide-control prev control-3">‹</label>
				<label for="slide-1" class="slide-control next control-3">›</label>
			</div>
</div>
<div id="video2"><video width="390" height="240" autoplay loop muted>
        <source src="pictures/adidas.mp4" type="video/mp4">
       
</video>

</div>

<div aria-label="Close Ads" class="close-fixedSd" role="button" tabindex="0" onclick="this.parentElement.style.display=&quot;none&quot;">

</div>

</div>
<div class="fixed-rightSd">



</div>
<br>
<br>
<br>
<br>
<br>
<br>
<p>noticias<p>

  </body>
  <script>
   /* let image = document.querySelector("#img1");
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
    
    mostrarEquipos(1340,equipo1);*/
  /*  $('section.awSlider .carousel').carousel({
	pause: "hover",
  interval: 2000
});*/


  </script>



</body>