<?php
    session_start();
    if (!(isset($_SESSION['email']))) {
    echo '<script language="javascript"> window.location="index.php";
    alert("Necesita tener cuenta");
    </script>';
    }
    
    require 'connectBD.php';
    require 'header.php';


    $sql = "SELECT idp,nombre,foto,precio,cantidad FROM productos ORDER BY idp ASC";
    $consulta = $conex->prepare($sql);
    $consulta->execute();
    $resultados=$consulta->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html lang="es">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="styles.css">
<style>


    #prods{
        position: relative;
        top:15%;
        width:65%;
        display:flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-bottom:300px;
    }

    .comprar{
        border:none;
    }


    #formulario{
        width:100%;
    }
    .prod{
        margin:0;
        width:100%;
        display:flex;
        flex-wrap: wrap;
        
        height:101%;
    }

    #formulario{
        width:45vh;
        height:50%;
        min-width: 300px;
        min-height: 400px;
        background-color:white;
        margin-bottom:10%;
        border:4px solid black;
        border-radius:10px;
        box-shadow: 3px 10px 20px black;

    }
    
    .n{
        text-align:center;
        width:100%;
        background-color:black;
        color: white;
    }

    .p{
        background-color:black;
        color: white;
        border-top-right-radius:10px;
        width: 40%;
        height: 20%;
        text-align:center;
        font-size: 100%;
    }

    .h2{
        padding-top:2%;
    }
    .b{
        width: 40%;
        margin-left: 10%;
        height:5vh;
    }

    .f{
        display:flex;
        width:100%;
        height:40vh;
        justify-content: space-around;
    }

.boton_comprar{
  
  height:100%;
  width:100%;
  font-size: 100%;
  font-family: 'Bebas Neue', sans-serif;
  background: linear-gradient(45deg, transparent 5%, #FF013C 5%);
  border: 0;
  color: #fff;
  letter-spacing: 3px;
  box-shadow: 6px 0px 0px #00E6F6;
  outline: transparent;
  position: relative;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}
.boton_comprar:hover{
    background: linear-gradient(45deg, transparent 5%, #8b0625 5%);
    box-shadow: 6px 0px 0px #0f868f;
    color:gray;
}


</style>
</head>

<body>

    

    <div id="prods" class="container" >
        <?php
        foreach($resultados as $resultado){?>
        <form id="formulario" name="formulario" method="post" action="cart.php">
        <div class="prod">
            <div class="n"><h2><?php echo $resultado["nombre"]?><h2></div >
            <div class="f"><img height="90%" width="80%" src="productos/<?php echo $resultado["foto"];?> "/></div>
            <div class="p"><h2 class="h2"><?php echo $resultado["precio"]?> €<h2></div>
            <div>
                <input name="nombre" type="hidden" id="nombre" value="<?php echo $resultado["nombre"];?>"/>
                <input name="precio" type="hidden" id="precio" value="<?php echo $resultado["precio"];?>"/>
                <input name="foto" type="hidden" id="foto" value="<?php echo $resultado["foto"];?>"/>
                <input name="cantidad" type="hidden" id="cantidad" min="1" value="1"/>
            </div>
            <div class="b"><button class="boton_comprar" type="submit">Comprar</button></div>
        </div>
        </form>
        <?php } ?>
        
</div>
<div><?php require 'footer.php'?><div>
</body>
</html>

