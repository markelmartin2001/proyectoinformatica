<?php
session_start();
if (!($_SESSION['rol']==0)) {
echo '<script language="javascript"> window.location="index.php";
alert("Acceso Denegado");
</script>';
}

require 'connectBD.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    if ($_GET['table']=="u"){
    $query = "DELETE FROM usuario WHERE id = $id";
    }else if($_GET['table']=="p"){
        $query = "DELETE FROM productos WHERE idp = $id";
    }
    $consulta = $conex->prepare($query);
    $consulta->execute();
    $result=$consulta;
    if(!$result){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Removido';
    $_SESSION['message_type'] = 'danger';

    header("Location: admin.php");
}

?>