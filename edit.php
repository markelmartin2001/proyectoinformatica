<?php
session_start();
if (!($_SESSION['rol']==0)) {
echo '<script language="javascript"> window.location="index.php";
alert("Acceso Denegado");
</script>';
}

require 'connectBD.php';

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $p_apellido = $_POST['p_apellido'];
    $s_apellido = $_POST['s_apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];
    $rol = $_POST['rol'];

    $query = "UPDATE usuario SET nombre ='$nombre', p_apellido = '$p_apellido',s_apellido = '$s_apellido',fecha_nacimiento ='$fecha_nacimiento', rol = '$rol', genero = '$genero' WHERE id = $id ";
    $consulta = $conex->prepare($query);
    $consulta->execute();

    header("Location: admin.php");
}

if(isset($_POST['update2'])){
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $foto = $_POST['foto'];
    $precio = $_POST['precio'];

    $imagen = $_FILES['ifoto']['name'];

    if(isset($imagen) && $imagen !=""){
        $tipo = $_FILES['ifoto']['type'];
        $temp = $_FILES['ifoto']['tmp_name'];
        if(!((strpos($tipo,'jpeg')|| strpos($tipo,'png')|| strpos($tipo,'jpg')))){
            
        }else{
            move_uploaded_file($temp, 'productos/'.$imagen);
        }
    }


    $query = "UPDATE productos SET nombre ='$nombre', precio = '$precio',foto = '$foto',cantidad ='$cantidad' WHERE idp = $id ";
    $consulta = $conex->prepare($query);
    $consulta->execute();

    header("Location: admin.php");
}

require 'header.php';
?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    if ($_GET['table']=="u"){
        $query = "SELECT * FROM usuario WHERE id = $id";
        $consulta = $conex->prepare($query);
        $consulta->execute();
        $results=$consulta->fetchAll(PDO::FETCH_ASSOC);
        if($consulta->rowCount()==1){
            foreach($results as $result){?>
            <div class="container p-4 cont" >
                <div class="container p-4">
                    <div class="col-md-4 mx-auto">
                        <div class="card card-body shadow p-3 mb-5 bg-white rounded">
                            <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                                <div class="form-group p-1">
                                    Nombre<input type="text"class="form-control " name="nombre" value="<?php echo $result["nombre"]?>"></div>
                                <div class="form-group p-1">
                                    Primer Apellido<input type="text"class="form-control " name="p_apellido" value="<?php echo $result['p_apellido'];?>"></div>
                                <div class="form-group p-1">
                                    Segundo Apellido<input type="text" class="form-control"name="s_apellido" value="<?php echo $result['s_apellido'];?>"></div>
                                <div class="form-group p-1">
                                    Fecha de Nacimiento<input type="date"class="form-control" name="fecha_nacimiento" value="<?php echo $result['fecha_nacimiento'];?>"></div>
                                    <div class="form-group p-1">
                                    Genero<select class="form-control" name="genero" class="sel">
                                        <option hidden><?php echo $result['genero'];?></option>
                                        <option>Hombre</option>
                                        <option>Mujer</option>
                                        <option>Otro</option>>
                                    </select></div>
                                <div class="form-group p-1">
                                   Rol <select class="form-control" name="rol" value="">
                                        <option value="0">Admin</option>
                                        <option value="1">Usuario</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary m-2" name=update>
                                    Editar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php }}
    }if ($_GET['table']=="p"){
        $query = "SELECT * FROM productos WHERE idp = $id";
        $consulta = $conex->prepare($query);
        $consulta->execute();
        $results=$consulta->fetchAll(PDO::FETCH_ASSOC);
        if($consulta->rowCount()==1){
            foreach($results as $result){?>
            <div class="container p-4 cont" >
                <div class="container p-4">
                    <div class="col-md-4 mx-auto">
                        <div class="card card-body shadow p-3 mb-5 bg-white rounded">
                            <form action="edit.php?id=<?php echo $_GET['id']; ?>&table=p" method="POST" enctype="multipart/form-data">
                                <div class="form-group p-1">
                                    Nombre<input type="text"class="form-control " name="nombre" value="<?php echo $result["nombre"]?>"></div>
                                <div class="form-group p-1">
                                    €<input type="number"class="form-control " name="precio" value="<?php echo $result['precio'];?>"></div>
                                <div class="form-group p-1">
                                    Uds.<input type="text" class="form-control"name="cantidad" value="<?php echo $result['cantidad'];?>"></div>
                                <div class="form-group p-1">
                                    Foto<input type="file"class="form-control" name="ifoto" value=""></div>
                                    <div class="form-group p-1">
                                    Nombre Foto<input type="text"class="form-control" name="foto" value="<?php echo $result["foto"];?>"></div>
                                    

                                <button class="btn btn-primary m-2" name=update2>
                                    Editar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
            }
        }
    // else if($_GET['table']=="p"){
    //     $query = "SELECT * FROM productos WHERE idp = $id";
    //     $consulta = $conex->prepare($query);
    //     $consulta->execute();
    //     $result=$consulta->fetchAll(PDO::FETCH_ASSOC);
    //     if($consulta->rowCount()==1){
    //         echo "Podes";
    //     }
    // }
}
?>