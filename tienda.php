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
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+DW+Pica:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IM+Fell+DW+Pica:ital@1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@665&family=IM+Fell+DW+Pica:ital@1&family=Righteous&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
<style>
    #prod{
        position: absolute;
        top:30%;
        width:90%
        
    }
    th{
        border-top:1px solid black;
        border-bottom:1px solid black;
    }
    td{
        border-top:3px solid black;
        width:25%;
        height: 150px;
    }

    .comprar{
        border:none;
    }

</style>
</head>

<body>

    
    
    <table id="prod" >
        <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Foto</th>
        <th class= "comprar"></th>
        </tr>
        <?php
        foreach($resultados as $resultado){?>
        <form id="formulario" name="formulario" method="post" action="cart.php">
        <tr>
            <td><?php echo $resultado["nombre"]?></td>
            <td><?php echo $resultado["precio"]?> €</td>
            <td><input name="cantidad" type="number" id="cantidad" min="1" value="1"/></td>
            <td><img src="productos/<?php echo $resultado["foto"]?> "/></td>
            <div>
                <input name="nombre" type="hidden" id="nombre" value="<?php echo $resultado["nombre"]?>"/>
                <input name="precio" type="hidden" id="precio" value="<?php echo $resultado["precio"]?>"/>
                <input name="foto" type="hidden" id="foto" value="<?php echo $resultado["foto"]?>"/>
            </div>
            <td class= "comprar"><button type="submit">Comprar</button></td>
        </tr>
        </form>
        <?php } ?>
    </table>
</body>