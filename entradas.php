<?php session_start();?>

<?php
    if (!(isset($_SESSION['email']))) {
    echo '<script language="javascript"> window.location="index.php";
    alert("Necesita tener cuenta");
    </script>';
    }
    
    require 'connectBD.php';
    require 'header.php';


    $sql = "SELECT * FROM entradas ORDER BY ide ASC";
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
.grande{
    position :absolute;
	display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
	width: 60%;
    height: auto;
    top: 20%;
    margin-left: 25%;
}

.segundo{
    width:80%;
    height:100%;
    border: 1px solid black;
    background-color: rgb(4, 4, 112);
    box-shadow: 3px 5px 10px black;
    border-radius:10px;
}
.tercero{
    height: 100%;
    width: 100%;
    background:white;
    border-radius:10px;
}
.nombre{
    font-size: 40px;
    background-color:black;
    color:white;
    width:100%;
    height: 20%;
    text-align:center;
    border-top-right-radius:10px;
    border-top-left-radius:10px;
}

.cartel{

    background-color:white;
    border-radius: 5px;
    border:2px solid black;
    height: 50%;
    text-align: center;
    font-size:30px;
    width:80%;
    margin-left:10%;
    margin-top:5%;
    box-shadow: 0px 0px 10px black;
}

.cartel p+p{
    margin-top:10%;
}

.precio{
  background-color: initial;
  background-image: linear-gradient(-180deg,red, #FF7E31);
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 0 2px 4px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family:system-ui,"Helvetica Neue",Arial,sans-serif;
  font-size:120%;
  height: 40px;
  line-height: 40px;
  outline: 0;
  overflow: hidden;
  padding: 0 20px;
  pointer-events: auto;
  position: relative;
  text-align: center;
  touch-action: manipulation;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: top;
  width: 40%;
  border: 0;
  margin-left:30%;
  margin-top:2%;
}

.precio:hover {
    
  box-shadow: rgba(253, 76, 0, 0.5) 0 3px 8px;
}

.forment{
    width:50%;
    min-width:400px;
    margin-bottom:8%;
    border-radius:10px;
}

</style>
</head>

<body>
<div class="grande">
<?php
        foreach($resultados as $resultado){?>
    
    <form id="formulario" name="formulario" method="post" action="cart.php" class=forment>
    
    <div class="segundo">
        <div class="tercero">
        
            <div class=nombre>
            <?php echo $resultado["tipo"]?>
            </div>
            <div class=cartel>
            <p>Fecha:<?php echo $resultado["fecha"]?></p>
            <p>Cantidad:<?php echo $resultado["cantidad"]?></p>
            </div>
            <div>
                <input name="nombre" type="hidden" id="nombre" value="<?php echo $resultado["tipo"]?>"/>
                <input name="precio" type="hidden" id="precio" value="<?php echo $resultado["precio"]?>"/>
                <input name="cantidad" type="hidden" id="cantidad" value="1"/>
            </div>
            <button class= "precio" type="submit"><?php echo $resultado["precio"]?>€</button>
        </div>
    </div>
    </form>
    
    <?php } ?>
</div>
        
</body>