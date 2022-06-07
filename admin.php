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

    $query3 ="SELECT t.ref, t.estado, t.medio, t.total, t2.cantidad, t2.articulo, t2.precio, t3.ref AS cref, t2.total AS 'total_precio', t3.nombre 
    FROM base_trabajo.pedido_cp t
    LEFT JOIN base_trabajo.pedido_datos_cp t2 ON t.ref = t2.ref
    LEFT JOIN base_trabajo.pedido_cliente_cp t3 ON t.cliente = t3.ref
    GROUP BY t.ref";
    $consulta3 = $conex->prepare($query3);
    $consulta3->execute();
    $resultados3=$consulta3->fetchAll(PDO::FETCH_ASSOC);


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
           
        }

        .img{
            width:40%;
            height:100;
        }
        .table{
            overflow: auto; 
            max-height:50vh;
        }
    </style>
    </head>

    <body>
        <div class="container p-4">    
            <div class="container p-4 cruddiv">
            <h1>Usuarios</h1>
            <a href="create.php?table=u" class="btn btn-success"><i class="fas fa-plus"></i></a>
            <div class="table">
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
                                <a href="edit.php?id=<?php echo $resultado1["id"]?>&table=u" class="btn btn-primary"><i class="fas fa-marker"></i></a>
                                <a href="delete.php?id=<?php echo $resultado1["id"]?>&table=u" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
            </div>

            <div class="container p-4 cruddiv">
            <h1>Productos</h1>
            <a href="create.php?table=p" class="btn btn-success"><i class="fas fa-plus"></i></a>
            <div class="table">
            <table id=products class=" crudt table table-striped table-hover">
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
                            <td><?php echo $resultado2["precio"];?>€</td>
                            <td><?php echo $resultado2["cantidad"];?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $resultado2["idp"]?>&table=p" class="btn btn-primary"><i class="fas fa-marker"></i></a>
                                <a href="delete.php?id=<?php echo $resultado2["idp"]?>&table=p" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
            </div>

            <!-- NO HECHO -->
            <div class="container p-4 cruddiv">
            <h1>Pedidos</h1>
            <div class="table">
            <table id=pedidos class=" crudt table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Referencia</th>
                        <th>Nombre</th>
                        <th>total</th>
                        <th>Esatdo</th>
                    </tr>
                </thead>
                <tbody class="table-light"><?php
                        $num =0;
                        foreach($resultados3 as $resultado3){
                            $num++ ?>
                        
                            <tr class=crudtr >
                                <th><?php echo $num;?></th>
                                <td><?php echo $resultado3["ref"];?></td>
                                <td><?php echo $resultado3["nombre"];?></td>
                                <td><?php echo $resultado3["total"];?></td>
                                <td><?php echo $resultado3["estado"];?></td>
                                
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
            </div>
        </div>

    </body>
</html>