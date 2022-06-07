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

    <div class="container">
    <h1 class="futmasc">FOTOS DEL ULTIMO PARTIDO</h1>



<div class="slider">
    <ul>
    <li><img src="Pictures/masculino1.jpg" alt=""></li>
    <li><img src="Pictures/masculino2.jpg" alt=""></li>
    <li><img src="Pictures/masculino3.jpg" alt=""></li>
    <li><img src="Pictures/masculino4.jpg" alt=""></li>
    
   
</ul>
</div>
</div>

<div class="contendorgrande">
<div class="container">
  <div class="card">
    <img src="Pictures/fotopartido1.png">
    <h4>Jornada 1</h4>
    <p>Partido contral el MADRID F.C. <br> MADRID F.C 2 JOVELLANOS F.C 4  <br> Victoria del equipo frente al vigente campeón.</p>
  <a href="#">Leer mas</a>
  </div>

  <div class="card">
    <img src="Pictures/jornada2.jpg">
    <h4>Jornada 2</h4>
    <p>Partido contral el MALAGA F.C. <br> JOVELLANOS F.C 2 MALAGA F.C 2  <br> Empate sufrida frente a un buen equipo.</p>
  <a href="#">Leer mas</a>
  </div>
    
  <div class="card">
    <img src="Pictures/jornada3.jpg">
    <h4>Jornada 3</h4>
    <p>Partido contral el GIRONA F.C. <br> CADIZ F.C 4 JOVELLANOS F.C 0  <br> Victoria placida del equipo</p>
  <a href="#">Leer mas</a>
  </div>

</div>


<div class="container">
  <div class="card">
    <img src="Pictures/jornada4.jpg">
    <h4>Jornada 4</h4>
    <p>Partido contral el GIRONA F.C. <br> JOVELLANOS F.C 2 GIRONA F.C 0  <br> Derrota del equipo en un mal partido.</p>
  <a href="#">Leer mas</a>
  </div>

  <div class="card">
    <img src="Pictures/jornada5.jpg">
    <h4>Jornada 5</h4>
    <p>Partido contral el GETAFE F.C. <br> GETAFE F.C 2 JOVELLANOS F.C 3  <br> victoria en una remontada épica del equipo.</p>
  <a href="#">Leer mas</a>
  </div>
    
  <div class="card">
    <img src="Pictures/jornada6.jpg">
    <h4>Jornada 6</h4>
    <p>Partido contral el CARABANCHEL F.C. <br> JOVELLANOS F.C 2 CARABANCHEL F.C 0  <br> Victoria dura del equipo.</p>
  <a href="#">Leer mas</a>
  </div>
</div>
</div>

<div><?php require 'footer.php'?></div>

</body>






<style>
.container{
  flex-direction: column;
    align-items: center;
}
.futmasc{
  height:10%;
}
.titulo{  
        z-index: 1;
        font-family: Arial; 
        font-size: 100%; 
        COLOR: black; 
        text-shadow: 0px 0px 9px #508AD3;
  }
.slider{ 
  height:85%;
    width:50%;
    overflow: hidden;
    z-index: 0;
  }
.slider ul{
    display: flex;
    width: 400%;
    animation: cambio 20s infinite alternate;
    animation-timing-function: linear;

  }

.slider li{
    width:100%;
    list-style: none;

}

.slider img{
    width:100%;
    
}

@keyframes cambio{
    0%{margin-left:0; }
    20%{margin-left:0; }

    25%{margin-left:-100%; }
    45%{margin-left:-100%; }

    50%{margin-left:-200%; }
    70%{margin-left:-200%; }

    75%{margin-left:-300%; }
    100%{margin-left:-300%; }
}





html,body{
  margin:0;
  padding : 0;
  
}
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
  margin-top:50px;
  margin-bottom:50px;
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

.contenedorgrande{
  margin-bottom: 300px;
  position:relative;
}

</style>