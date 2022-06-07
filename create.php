<?php
session_start();
if (!($_SESSION['rol']==0)) {
echo '<script language="javascript"> window.location="index.php";
alert("Acceso Denegado");
</script>';
}
require 'connectBD.php';

    if (isset($_POST['create'])){
        if (!empty($_POST['nombre']) && !empty($_POST['p_apellido']) && !empty($_POST['s_apellido']) &&!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['fecha_nacimiento'])) {
        $nombre = $_POST['nombre'];
        $p_apellido = $_POST['p_apellido'];
        $s_apellido = $_POST['s_apellido'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $genero = $_POST['genero'];
        $rol = $_POST['rol'];
        $email = $_POST['email'];
        $query = "INSERT INTO usuario (nombre, p_apellido, s_apellido,email, password, fecha_nacimiento, genero,rol) VALUES ('$nombre', '$p_apellido', '$s_apellido','$email', '$password', '$fecha_nacimiento', '$genero', '$rol')";
        $consulta = $conex->prepare($query);
        $consulta->execute();

        header("Location: admin.php");
    }else{
        echo"Rellena todos los campos";
    }
    }
    if (isset($_POST['create2'])){
        if (!empty($_POST['nombre']) && !empty($_POST['precio']) && !empty($_POST['cantidad']) && isset($_FILES['ifoto']['name']) && $_FILES['ifoto']['name'] !="") {
            $nombre = $_POST['nombre'];
            $cantidad = $_POST['cantidad'];
            $precio = $_POST['precio'];
            $foto = $_FILES['ifoto']['name'];
            echo "aqui";
                $tipo = $_FILES['ifoto']['type'];
                $temp = $_FILES['ifoto']['tmp_name'];
                if(!((strpos($tipo,'jpeg')|| strpos($tipo,'png')|| strpos($tipo,'jpg')))){
                    echo "aqui2";
                }else{
                    echo "aqui3";
                    $query = "INSERT INTO productos (nombre, cantidad, precio,foto) VALUES ('$nombre', '$cantidad', '$precio','$foto')";
                    $consulta = $conex->prepare($query);
                    $consulta->execute();
                    move_uploaded_file($temp, 'productos/'.$foto);
                    header("Location: admin.php");
            }
        }else {
            echo"Rellena todos los campos";
        }
    }

require 'header.php';
?>


<?php
if ($_GET['table']=="u"){?>
    <div class="container p-4 cont" >
                <div class="container p-4">
                    <div class="col-md-4 mx-auto">
                        <div class="card card-body shadow p-3 mb-5 bg-white rounded">
                            <form action="create.php?table=u" method="POST">
                                <div class="form-group p-1">
                                    Nombre<input type="text"class="form-control " name="nombre" value=""></div>
                                <div class="form-group p-1">
                                    Primer Apellido<input type="text"class="form-control " name="p_apellido" value=""></div>
                                <div class="form-group p-1">
                                    Segundo Apellido<input type="text" class="form-control"name="s_apellido" value=""></div>
                                <div class="form-group p-1">
                                    Email<input type="text" class="form-control"name="email" value=""></div>
                                <div class="form-group p-1">
                                    Contraseña<input type="password"class="form-control " name="password" value=""></div>
                                <div class="form-group p-1">
                                    Fecha de Nacimiento<input type="date"class="form-control" name="fecha_nacimiento" value=""></div>
                                <div class="form-group p-1">
                                    Genero<select class="form-control" name="genero" class="sel">
                                    <option value="" hidden>Género</option>
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
                                <button class="btn btn-success m-2" name=create>
                                    Crear
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div><?php
}if ($_GET['table']=="p"){?>
        <div class="container p-4 cont" >
            <div class="container p-4">
                <div class="col-md-4 mx-auto">
                    <div class="card card-body shadow p-3 mb-5 bg-white rounded">
                        <form action="create.php?table=p" method="POST" enctype="multipart/form-data">
                            <div class="form-group p-1">
                                Nombre<input type="text"class="form-control " name="nombre" value=""></div>
                            <div class="form-group p-1">
                                €<input type="number"class="form-control " name="precio" value="<"></div>
                            <div class="form-group p-1">
                                Uds.<input type="number" class="form-control"name="cantidad" value=""></div>
                            <div class="form-group p-1">
                                Foto<input type="file"class="form-control" name="ifoto" value=""></div>
                                <div class="form-group p-1">
                                

                            <button class="btn btn-success m-2" name=create2>
                                Crear
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php }


?>