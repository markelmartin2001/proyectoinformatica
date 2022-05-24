<?php session_start();

    if(isset($_SESSION['carrito'])|| isset($_POST['nombre'])){
        if(isset($_SESSION['carrito'])){
            $carrito_mio =$_SESSION['carrito'];
            $foto ="";
            $fecha="";
            if(isset($_POST['nombre'])){
                $nombre = $_POST['nombre'];
                $precio = $_POST['precio'];
                $cantidad = $_POST['cantidad'];
                if($_POST['foto']){
                $foto = $_POST['foto'];
                }
                $donde = -1;
                if($donde !=-1){
                    $cuanto = $carrito_mio[$donde]['cantidad'] + $cantidad;
                    $carrito_mio[$donde]=array("nombre"=>$nombre,"precio"=>$precio,"cantidad"=>$cuanto,"foto"=>$foto);
                }else{
                    $carrito_mio[]=array("nombre"=>$nombre,"precio"=>$precio,"cantidad"=>$cantidad,"foto"=>$foto);
                }
            }

        }else{
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
            $carrito_mio[]=array("nombre"=>$nombre,"precio"=>$precio,"cantidad"=>$cantidad,"foto"=>$foto);
        }
        
        if(isset($_POST['cantidad'])){
            $id=$_POST['id'];
            $cuantos = $_POST['cantidad'];
            if($cuantos<1){
                $carrito_mio[$id]=NULL;
            }else{
                $carrito_mio[$id]['cantidad']=$cuantos;
            }
        }

        if(isset($_POST['id2'])){
            $id = $_POST['id2'];
            $carrito_mio[$id]=NULL;
        }



        $_SESSION['carrito']=$carrito_mio;
    }

header("Location: ".$_SERVER['HTTP_REFERER']."");    
?>