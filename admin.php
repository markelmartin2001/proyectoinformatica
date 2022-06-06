<?php
    session_start();
    if (!($_SESSION['rol']==0)) {
    echo '<script language="javascript"> window.location="index.php";
    alert("Acceso Denegado");
    </script>';
    }
    
    require 'connectBD.php';
    require 'header.php';

    $query1 = "SELECT * FROM usuario";
    $consulta1 = $conex->prepare($query1);
    $consulta1->execute();
    $resultados1=$consulta1->fetchAll(PDO::FETCH_ASSOC);

    $query2 = "SELECT * FROM productos";
    $consulta2 = $conex->prepare($query2);
    $consulta2->execute();
    $resultados2=$consulta2->fetchAll(PDO::FETCH_ASSOC);


?>

<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <style>
        .crudt{
            text-align:center;
            height:60%;
            
        }

        .cruddiv{
           height:60%;
           overflow: auto;
        }

        .img{
            width:40%;
            height:100;
        }
    </style>
    </head>

    <body>
        <div class="container p-4">    
            <div class="container p-4 cruddiv">
            <h1>Usuarios</h1>
            <table id=usuarios class=" crudt table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Fecha de nacimiento</th>
                        <th>Genero</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <?php foreach($resultados1 as $resultado1){?>
                        <tr class=crudtr >
                            <th><?php echo $resultado1["id"];?></th>
                            <td><?php echo $resultado1["p_apellido"]." ". $resultado1["s_apellido"]." , ".$resultado1["nombre"];?></td>
                            <td><?php echo $resultado1["email"];?></td>
                            <td><?php echo $resultado1["fecha_nacimiento"];?></td>
                            <td><?php echo $resultado1["genero"];?></td>
                            <td><?php echo $resultado1["rol"];?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $resultado1["id"]?>" class="btn btn-primary"><i class="fas fa-marker"></i></a>
                                <a href="delete.php?id=<?php echo $resultado1["id"]?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>

            <div class="container p-4 cruddiv prod">
            <h1>Productos</h1>
            <table id=usuarios class=" crudt table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Foto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <?php foreach($resultados2 as $resultado2){?>
                        <tr class=crudtr >
                            <th><?php echo $resultado2["idp"];?></th>
                            <td><?php echo $resultado2["nombre"];?></td>
                            <td><div class=img><img height="100%" width="100%" src="productos/<?php echo $resultado2["foto"];?> "/><div></td>
                            <td><?php echo $resultado2["precio"];?></td>
                            <td><?php echo $resultado2["cantidad"];?></td>
                            <td></td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>

            <div class="container p-4 cruddiv">
            <h1>Pedidos</h1>
            <table id=usuarios class=" crudt table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Fecha de nacimiento</th>
                        <th>Genero</th>
                        <th>Rol</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <?php foreach($resultados1 as $resultado1){?>
                        <tr class=crudtr >
                            <td><?php echo $resultado1["p_apellido"]." ". $resultado1["s_apellido"]." , ".$resultado1["nombre"];?></td>
                            <td><?php echo $resultado1["email"];?></td>
                            <td><?php echo $resultado1["fecha_nacimiento"];?></td>
                            <td><?php echo $resultado1["genero"];?></td>
                            <td><?php echo $resultado1["rol"];?></td>
                            <td></td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>

    </body>
</html>