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
    </style>
</head>

<body>
    
    <div id= compra>
        <div id= caja_product>
        <div id = product>
        <ul>
            <?php
                if(isset($_SESSION['carrito'])){
                $total = 0;
                for($i=0;$i<=count($carrito_mio)-1;$i++){
                    if(isset($carrito_mio[$i])){
                    if($carrito_mio[$i]!=NULL){
            ?>
            <li class="liprod">

                <div class="divprod">
                    <div class="prod"><span><?php echo $carrito_mio[$i]['nombre']; ?></span> </div>
                    <div class="prod">
                        <form id=form2 name="formulario" method="post" action="cart.php">
                            <input name="id" type="hidden" id="id" value="<?php print $i; ?>" />
                            <input name="cantidad" type="number" id="cantidad" min="1" value="<?php echo $carrito_mio[$i]['cantidad']; ?>" size="1" maxlength="2" />
                            <button class= editar> Editar</button>
                        </form>
                    </div>
                        

                    <div class="prod">
                        <span style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precio'] ?> € || Cantidad: <?php echo $carrito_mio[$i]['cantidad']; ?></span>
                    </div>
                    <div class="prod">
                    <form id=form3 name="formulario2" method="post" action="cart.php">
                        <input name="id2" type="hidden" id="id2" value="<?php print $i; ?>" />
                        <button class=vaciar> Borrar</button>
                    </form>    
                    </div>
                </div>

            </li>       

            <?php
                $total = $total +($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                }}}}
            ?>
        </ul>
        </div>
        <div class=total>
        <div class = fin>
            <h1 style= "">Total:</h1>
            <h1><?php   
            if(isset($_SESSION['carrito'])){
                $total=0;
                for ($i=0; $i <= count($carrito_mio)-1; $i++) { 
                    if(isset($carrito_mio[$i])){
                        if($carrito_mio[$i]!=NULL){
                            $total = $total +($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                    }}}
                    }
            if(!isset($total)){$total = '0';}else{$total = $total;}
            echo $total;?>€</h1>
        </div>
        <div class="fin2">
           <a class="finalizar" type=button href="compra2.php">Continuar</a>
        </div>
        </div>
        <div>
    </div>
</body>