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
	width: 50%;
    height: 640px;
    top: 20%;
    margin-left: 25%;
}
.segundo{
    width: 400px;
    height: 300px;
    border: 1px solid black;
    background-color: rgb(4, 4, 112);
}
.tercero{
    height: 100%;
    width: 100%;
}
.nombre{
    font-size: 40px;
    background-color:rgb(149, 192, 241);
    width:100%;
    height: 20%;
    text-align:center;
}

.cartel{

    background-color:white;
    border-radius: 25px;
    height: 60%;
    text-align: center;
    font-size:30px;
    width:80%;
    margin-left:10%;
    margin-top:2%;
}

.cartel p{
    padding-bottom:10px;
}

.precio{
  background-color: initial;
  background-image: linear-gradient(-180deg,red, #FF7E31);
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 0 2px 4px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Inter,-apple-system,system-ui,Roboto,"Helvetica Neue",Arial,sans-serif;
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
  white-space: nowrap;
  width: 40%;
  z-index: 9;
  border: 0;
  transition: box-shadow .2s;
  margin-left:30%;
  margin-top:2%;
}

.precio:hover {
  box-shadow: rgba(253, 76, 0, 0.5) 0 3px 8px;
}
</style>
</head>

<body>
<div class="grande">
<?php
        foreach($resultados as $resultado){?>
    <div class="segundo">

        <div class="tercero">

            <div class=nombre>
            <?php echo $resultado["tipo"]?>
            </div>
            <div class=cartel>
            <p>Fecha:<?php echo $resultado["fecha"]?></p><br>
            <p>Cantidad:<?php echo $resultado["cantidad"]?></p><br>
            </div>
            <button class= "precio"><?php echo $resultado["precio"]?>€</button>
        </div>
    </div>
    <?php } ?>
</div>
        
</body>