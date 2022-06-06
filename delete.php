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
}

?>