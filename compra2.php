<?php
        session_start();
        if (!(isset($_SESSION['email']))) {
        echo '<script language="javascript"> window.location="index.php";
        alert("Necesita tener cuenta");
        </script>';
        }
        
        require 'connectBD.php';
        require 'header.php';
?>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="styles.css">
    <style>
        ::-webkit-scrollbar {
            display: none;
        }
        
        #product>ul{
	        width:95%;
            padding:0;
        }

        #caja_product2{
            background:white;
            box-shadow: 3px 5px 10px black;
            height:auto;
        }
        .liprod2{
            
            height:2em;
            font-size: 25px;
            border-bottom: 2px solid black;
            background-color:rgba(255, 255, 255, 0.781);
            margin-top:5px;
            
        }
        .divprod2{
            display: flex;
            height: 100%;
            justify-content: space-between;
            align-items: center;
        }
        #product{
            border-bottom:3px solid black;
            height:40%;
        }

        .cajat{
            height:6%;
            display: flex;
            justify-content: space-between;
            border-bottom:1px solid black;
        }

        .datos {
            height: 10%;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
        }
        .cajadato {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            justify-content: space-evenly;
            height:50%;
            width:40%;
        }
        .dato1{
            font-size:22px;
            width:10%;
        }

        .dato2{
            width:50%;
        }
    </style>
</head>

<body>
    
    <div id= compra>
        <div id= caja_product2>
        <div id = product>
        <ul>
            <?php
                if(isset($_SESSION['carrito'])){
                $total = 0;
                for($i=0;$i<=count($carrito_mio)-1;$i++){
                    if(isset($carrito_mio[$i])){
                    if($carrito_mio[$i]!=NULL){
            ?>
            <li class="liprod2">

                <div class="divprod2">
                    <div class="prod"><span><?php echo $carrito_mio[$i]['nombre']; ?></span> </div>
                        

                    <div class="prod">
                        <span style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precio'] ?> € || Cantidad: <?php echo $carrito_mio[$i]['cantidad']; ?></span>
                    </div>

                    <div class="prod">
                        <span style="text-align: right; color: #000000; text-align: right;">Total:<?php $sum= $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']; echo $sum;?>€</span>
                    </div>
                </div>

            </li>       

            <?php
                $total = $total +($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                }}}}
            ?>
        </ul>
        </div>
        <div class = cajat>
            <h3 style= "">Total:</h3>
            <h3><?php   
            if(isset($_SESSION['carrito'])){
                $total=0;
                for ($i=0; $i <= count($carrito_mio)-1; $i++) { 
                    if(isset($carrito_mio[$i])){
                        if($carrito_mio[$i]!=NULL){
                            $total = $total +($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                    }}}
                    }
            if(!isset($total)){$total = '0';}else{$total = $total;}
            echo $total;?>€</h3>
        </div>

        <div class = cajat>
            <h3 style= "">I.V.A:</h3>
            <h3><?php 
                $masiva = $total /1.21;
                $totaliva = $total - $masiva;
                echo number_format($totaliva,2,'.','.');
            ?>€</h3> 
        </div>

        <div class = cajat>
            <h3 style= "">Total + I.V.A:</h3>
            <h3><?php 
                $ti = $total + $totaliva;
                echo number_format($ti,2,'.','.');
            ?>€</h3> 
        </div>

<?php
$sql = "SELECT * FROM base_trabajo.usuario ORDER BY RAND() LIMIT 1";
$consulta = $conex->prepare($sql);
$consulta->execute();
$resultado=$consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<form action="pagar.php" method="POST" novalidate>

    <p style="font-weight: bold; font-size: 22px; text-align: center;">Datos de envío</p>
    <div class = datos>
    <input type="hidden" name="dato" value="insertar" >
    <div class="cajadato">
        <label for="validationCustom01" class="dato1">Nombre</label>
        <input type="text" class="dato2" id="validationCustom01" name="nombre" value=""  required>

    </div>
    <div class="cajadato">
        <label for="validationCustom02" class="dato1">Apellidos</label>
        <input type="text" class="dato2" id="validationCustom02" name="apellidos" value=""  required>

    </div>

    <div class="cajadato">
        <label for="validationCustom03" class="dato1">Localidad</label>
        <input type="text" class="dato2" id="validationCustom03" name="localidad" value=""  required>

    </div>
    <div class="cajadato">
        <label for="validationCustom04" class="dato1">Teléfono</label>
        <input type="text" class="dato2" id="validationCustom04" name="telefono" value=""  required>
    
    </div>

    </div>
    <button  class="btn btn-success mb-4" type="submit">Pagar y finalizar</button>

</form>            
        <!-- <div class="">
           <a class="finalizar" type=button href="compra2.php">Continuar</a>
        </div> -->
    </div>
</body>