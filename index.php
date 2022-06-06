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

body{
  width: 100%;
  height: 100%;
  font-family: sans-serif;
  letter-spacing: 0.03em;
  line-height:1.6;

}

.title{
  text-align:center;
  font-size:40px;
  color:#6a6a6a;
  margin-top:100px;
  font-weight:100;
}
.container{
  width: 100%;
  max-width:1200px;
  height: 430px;
  display:flex;
  flex-wrap:wrap;
  justify-content:center;
  margin:auto;
}

.container .card{
  width: 330px;
  height: 430px;
  border-radius:8px;
  box-shadow:0 2px 2px rgba(0,0,0,0.2);
  overflow:hidden;
  margin:20px;
  text-align:center;
  transition:all 0.25s;
}

.container .card:hover{
  transform:translateY(-15px);
  box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
}

.container .card img{
  width: 330px;
  height: 220px;
}

.container .card h4{
  font-weight:600;
}

.container .card p{
  padding:0 1rem;
  font-size: 16px;
  font-weight:300;
}

.container .card a{
  font-weight:300;
  text-decoration: none;
  color: #3498db;
}


.full{
  position: relative;
  top:100px;
  margin-bottom:300px;
  
}



  </style>


<body>

<?php require 'header.php'?>


  <!-- <title>Resumenes de los ultimos partidos</title> -->
  <div class=full>
  <div class="container">
    <div class="card">
      <img src="Pictures/fotopartido1.png">
      <h4>partido1</h4>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, ipsam error.</p>
      <a href="#">Leer mas</a>
    </div>

    <div class="card">
      <img src="Pictures/fotopartido1.png">
      <h4>partido1</h4>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, ipsam error.</p>
      <a href="#">Leer mas</a>
    </div>
    
    <div class="card">
      <img src="Pictures/fotopartido1.png">
      <h4>partido1</h4>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, ipsam error.</p>
      <a href="#">Leer mas</a>
    </div>

 
  </div>
</div>


  </body>
  
 </html>
 <div><?php require 'footer.php'?><div>
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