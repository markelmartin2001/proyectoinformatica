<?php session_start();?>

<!doctype html>
<html lang="es">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
</head>
<style>

*{
  margin:0;
  padding: 0;
  box-sizing: border-box;
  font-family : 'Lato' , sans-serif;
}

body{
  background: #F1F1F1;
}

.container_cards{
  max-width : 1200px;
  margin:auto;
  display:flex;
  flex-wrap:wrap;
  justify-content: center;
}

.card:hover{
  width: 350px;

}
.card{
  width: 300px;
  margin: 10px;
  transition: all 300ms;
}

.card .cover{
  width: 100%;
  height: 250px;
  position: relative;
  overflow: hidden;
}
.card .cover img{
  width: 250px;
  display: block;
  margin:auto;
  top: 40px;
  position: relative;
  z-index: 1;
  filter: drop-shadow(5px 5px 4px rgba(0,0,0,0.5));
  transition: all 400ms;
}

.cover:hover  img{
  top: 10px;
  filter: none;

}

.card .img_back{
  width: 100%;
  height: 200px;
  position: absolute;
  bottom: -80px;
  left:0;
  background-size:cover;
  border-radius: 20px;

}

.card:hover .img_back{
  bottom: -40px;
  transition: all 300ms;
}

.card:nth-of-type(1) .img_back{
  background-image: url(Pictures/b1.jpg);
}

.card:nth-of-type(2) .img_back{
  background-image: url(Pictures/b1.jpg);
}

.card:nth-of-type(3) .img_back{
  background: url(Pictures/b1.jpg);
}

.card .description{
  background: white;
  margin-top: -10px;
  padding: 20px;
  border-radius: 0px 0px 20px 20px;
  transition: all 300ms;
}

.carf:hover .description{
  padding: 40px;
}

.card .description h2{
  margin-top: 10px;
}

.card .descrption p{
  margin-top: 10px;
}

.card .description input{
  padding: 10px 40px;
  margin-top: 20px;
  border: none;
  background: #3b302a;
  color: white;
  font-size: 14px;
  cursor: pointer;
  border-radius: 8px;
  transition: all 300ms;
}

.card .description input:hover{
  background: #1c0d02;
}

.container{
  margin-top:5%;
  margin-bottom:5%;
}

.container h1{
  font-weight:bold;
  margin-left:25%;
}
  </style>


<body>

<?php require 'header.php'?>

<div class="container">
<h1>ULTIMOS FICHAJES MASCULINOS</h1>
<div class="container_cards">

  <div class="card">
    <div class="cover">
      <img src="Pictures/paginaprincipal1.png">
      <div class="img_back"></div>
    </div>
    <div class="description">
      <h2>KILLIAM MBAPPE</h2>
      <p>Jugador frances muy joven , procedente del PSG.  <br> Juega como delantero y es nuestra futura estrella, es la ilusion de la afición. </p>
      <input type="button" value="Leer mas">
    </div>
  </div>

  <div class="card">
    <div class="cover">
    <img src="Pictures/principal2.png">
      <div class="img_back"></div>
    </div>
    <div class="description">
      <h2>SERGIO  RAMOS</h2>
      <p>Jugador español, procedente del PSG.  <br> Juega como defensa y es un jugador que aporta liderazgo al equipo.</p>
      <input type="button" value="Leer mas">
    </div>
  </div>

  <div class="card">
    <div class="cover">
      <img src="Pictures/principal3.png">
      <div class="img_back"></div>
    </div>
    <div class="description">
      <h2>EDER MILITAO</h2>
      <p>Jugador brasileño con mucha proyeccion , procedente del Oporto.  <br> Juega como defensa y es una apuesta de futuro.</p>
      <input type="button" value="Leer mas">
    </div>
  </div>

</div>
</div>
<div class="container">
<h1>ULTIMOS FICHAJES FEMENINOS</h1>
<div class="container_cards">

  <div class="card">
    <div class="cover">
      <img src="Pictures/ff3.png">
      <div class="img_back"></div>
    </div>
    <div class="description">
      <h2>SOFIA MARTIN</h2>
      <p>Jugador frances muy joven , procedente del PSG.  <br> Juega como lateral y es un refuerzo en una posicion con pocas integrantes.</p>
      <input type="button" value="Leer mas">
    </div>
  </div>

  <div class="card">
    <div class="cover">
      <img src="Pictures/ff2.png" >
      <div class="img_back"></div>
    </div>
    <div class="description">
      <h2>MARIA RUIZ</h2>
      <p>Jugadora española , procedente del español.  <br> Juega como delantera y es la apuesta goleadora del equipo.</p>
      <input type="button" value="Leer mas">
    </div>
  </div>

  <div class="card">
    <div class="cover">
      <img src="Pictures/ff1.png">
      <div class="img_back"></div>
    </div>
    <div class="description">
      <h2>PAULA LOPEZ</h2>
      <p>Jugadora franespañol, procedente del Getafe.  <br> Juega como mediocentro y es nuestra futura estrella.</p>
      <input type="button" value="Leer mas">
    </div>
  </div>
</div>
</div>
  <!-- <title>Resumenes de los ultimos partidos</title> -->
  

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