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
        #compra{
            border:1px;
            width: 100%;
            height:80%;
            position:absolute;
            top:20%;
            display:flex;
            align-items: center;
            justify-content: center;
        }

        #compra > div{
            border: solid 3px black;
            height: 95%;
            width:90%;
        }

        #total{
            border-top:1px solid black;
            font-size:30px;
            text-align:center;
        }

        #product{
            height:90%;
            overflow: auto;
        }

        .liprod{
            height:3em;
            font-size: 25px;
            border: 1px black solid;
        }

    .prod{
        text-align: left;
        color: #000000;
        display: inline-block;
        margin-left:5%;

    }

    .editar {
        background-color: blue;
        border-radius: 8px;
        box-sizing: border-box;
        color: #FFFFFF;
        cursor: pointer;
        font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-weight: 500;
        height: 40px;
        padding: 10px 16px;
        text-align: center;
        text-decoration: none;
    }
    #cantidad{
        width:20%;
        height:40%;
    }
    </style>
</head>

<body>
    
    <div id= compra>
        <div>
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

                <div>
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
                        
                    </div>
                </div>

            </li>       

            <?php
                $total = $total +($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                }}}}
            ?>
        </ul>
        </div>
        <div id = total>
            <span style= "">Total:</span>
            <strong><?php   
            if(isset($_SESSION['carrito'])){
                $total=0;
                for ($i=0; $i <= count($carrito_mio)-1; $i++) { 
                    if(isset($carrito_mio[$i])){
                        if($carrito_mio[$i]!=NULL){
                            $total = $total +($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                    }}}
                    }
            if(!isset($total)){$total = '0';}else{$total = $total;}
            echo $total;?>€</strong>
        </div>
        </div>
    </div>
</body>