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

<div class = "contendor">



<div class="titulo">
    <h1>FOTOS DEL ULTIMO PARTIDO</h1>
</div>

<div class="slider">
    <ul>
    <li><img src="Pictures/imagenslide1.jpg" alt=""></li>
    <li><img src="Pictures/imagenslide2.jpg" alt=""></li>
    <li><img src="Pictures/imagenslide3.jpg" alt=""></li>
    <li><img src="Pictures/imagenslide4.jpg" alt=""></li>
</ul>
</div>
</div> 


<div class="contendorgrande">
<div class="container">
  <div class="card">
    <img src="Pictures/jordana1f.jpg">
    <h4>Jornada 1</h4>
    <p>Partido contral el GIRONA F.C. <br> JOVELLANOS F.C 2 - Girona F.C 0  <br> Victoria placida del equipo.</p>
  <a href="#">Leer mas</a>
  </div>

  <div class="card">
    <img src="Pictures/jornada2f.jpg">
    <h4>Jornada 2</h4>
    <p>Partido contral el MALLORCA F.C. <br> GETAFE F.C 0 - JOVELLANOS F.C 4  <br> Victoria placida del equipo.</p>
  <a href="#">Leer mas</a>
  </div>
    
  <div class="card">
    <img src="Pictures/jornada3f.jpg">
    <h4>Jornada 3</h4>
    <p>Partido contral el BETIS F.C. <br> JOVELLANOS F.C 3 BETIS F.C 2  <br> Victoria sufrida en casa.</p>
  <a href="#">Leer mas</a>
  </div>

</div>


<div class="container">
  <div class="card">
    <img src="Pictures/jornada4f.jpg">
    <h4>Jornada 4</h4>
    <p>Partido contral el GIRONA F.C. <br>MANRESA F.C 2-JOVELLANOS F.C 2<br> Primer empate del equipo en la temporada.</p>
  <a href="#">Leer mas</a>
  </div>

  <div class="card">
    <img src="Pictures/jornada5f.jpg">
    <h4>Jornada 5</h4>
    <p>Partido contral el CADIZ F.C. <br> JOVELLANOS F.C 2 - CADIZ F.C 0  <br> Victoria importante del equipo para coger confiaza.</p>
  <a href="#">Leer mas</a>
  </div>
    
  <div class="card">
    <img src="Pictures/jornada6f.webp">
    <h4>Jornada 6</h4>
    <p>Partido contral el SEVILLA F.C. <br> JOVELLANOS F.C 1 - Girona F.C 2  <br> Derrota que deja tocado al equipo.</p>
  <a href="#">Leer mas</a>
  </div>
</div>
</div>

<?php require 'footer.php'?>
</body>
<style>

.titulo{  
        z-index: 1;
        position:absolute;
        top:22%;
        left:35%;
        font-family: Arial; 
        font-size: 100%; 
        COLOR: black; 
        text-shadow: 0px 0px 9px #508AD3;}
.slider{ 
    position: relative;
    top: 20%;
    left:25%;
    width:50%;
    overflow: hidden;
    z-index: 0;
    margin-top: 100px;
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
