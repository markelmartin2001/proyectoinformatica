<?php  
session_start();
    if (!(isset($_SESSION['email']))) {
    echo '<script language="javascript"> window.location="index.php";
     alert("Necesita tener cuenta");
     </script>';
    }
        
    require 'connectBD.php';



//insertamos los datos del cliente
//creamos referencia de cliente
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$password = "";
for($i=0;$i<5;$i++) {
$password .= substr($str,rand(0,64),1);
}
$ref_cliente = $password;
$sql = "INSERT INTO pedido_cliente_cp (ref,nombre,apellidos,localidad,telefono)
VALUES ('".$ref_cliente."', '".$_POST["nombre"]."', '".$_POST["apellidos"]."', '".$_POST["localidad"]."', '".$_POST["telefono"]."')";
$stmt= $conex->prepare($sql);
$stmt->execute($data);





//creamos referencia de pedido
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$password = "";
for($i=0;$i<5;$i++) {
$password .= substr($str,rand(0,64),1);
}
$ref = $password;



//insertamos el pedido

if(isset($_SESSION['carrito'])){
    $carrito_mio=$_SESSION['carrito'];
    // $_SESSION['carrito']=$carrito_mio;
    }


            if(isset($_SESSION['carrito'])){
            $total=0;
            for($i=0;$i<=count($carrito_mio)-1;$i ++){
                if(isset($carrito_mio[$i])){
                if($carrito_mio[$i]!=NULL){
        
                    $cantidad = $carrito_mio[$i]['cantidad'];
                    $articulo = $carrito_mio[$i]['nombre'];
                    $precio = $carrito_mio[$i]['precio'];
                    $total_precio = $precio * $cantidad;
                    $sql = "INSERT INTO pedido_datos_cp (ref,cantidad,articulo,precio,total)
                    VALUES ('$ref', '$cantidad', '$articulo', '$precio', '$total_precio')";
                    $stmt= $conex->prepare($sql);
                    $stmt->execute($data); 
           
            }
            }
            }
            }


       
            if(isset($_SESSION['carrito'])){
            $total=0;
            for($i=0;$i<=count($carrito_mio)-1;$i ++){
                if(isset($carrito_mio[$i])){
            if($carrito_mio[$i]!=NULL){ 
            $total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
            }
            }}}
            if(!isset($total)){$total = '0';}else{ $total = $total;}
            //echo $total; 







$ref_user = $ref_cliente;
$estado = 'Falta de pago';
$medio = 'Tarjeta bancaria';
$total_pedido = $total;

$sql = "INSERT INTO pedido_cp (ref,cliente,estado,medio,total)
VALUES ('$ref', '$ref_user', '$estado', '$medio', '$total_pedido')";
$stmt= $conex->prepare($sql);
$stmt->execute($data);


unset( $_SESSION["carrito"] ); 

header("Location: index.php");



?>