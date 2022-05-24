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

    <div class="titulo">
    <h1>FOTOS DEL ULTIMO PARTIDO</h1>
</div>


<div class="slider">
    <ul>
    <li><img src="Pictures/masculino1.jpg" alt=""></li>
    <li><img src="Pictures/masculino2.jpg" alt=""></li>
    <li><img src="Pictures/masculino3.jpg" alt=""></li>
    <li><img src="Pictures/masculino4.jpg" alt=""></li>
    
   
</ul>
</div>

</body>

<style>
.titulo{  
        z-index: 1;
        position:absolute;
        top:25%;
        left:35%;
        font-family: Arial; 
        font-size: 25px; 
        COLOR: black; 
        text-shadow: 0px 0px 9px #508AD3;}
.slider{ 
    position: absolute;
    top: 25%;
    left:20%;
    width:68%;
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

</style>