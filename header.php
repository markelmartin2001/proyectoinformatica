<?php
   

    require 'connectBD.php';

    if (isset($_SESSION['email'])) {
    $records = $conex->prepare('SELECT email, password FROM usuario WHERE email = :email');
    $records->bindParam(':email', $_SESSION['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }

    // Carrito
    if(isset($_SESSION['carrito'])){
        $carrito_mio=$_SESSION['carrito'];
    }

    if(isset($_SESSION['carrito'])){

        for($i=0;$i<=count($carrito_mio)-1;$i++){
            if (isset($carrito_mio[$i])) {
            if($carrito_mio[$i]!=NULL){
            if(!isset($carrito_mio['cantidad'])){$carrito_mio['cantidad']='0';}else{$carrito_mio['cantidad']=$carrito_mio['cantidad'];}
            $total_cantidad =$carrito_mio['cantidad'];
        $total_cantidad++;
        if(!isset($totalcantidad)){$totalcantidad = '0';}else{$totalcantidad = $totalcantidad;}
        $totalcantidad += $total_cantidad;
        }}}
    }

    if(!isset($totalcantidad)){$totalcantidad = '';}else{$totalcantidad = $totalcantidad;}


    // Carrito
}

?>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="./styles.css">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+DW+Pica:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IM+Fell+DW+Pica:ital@1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@665&family=IM+Fell+DW+Pica:ital@1&family=Righteous&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
<!--Carrito  -->
<script>
    function mostrar(id) {
    var x = document.getElementById(id);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
<style>
    #carrito{
        position: absolute;
        width:25%;
        min-height:20%;
        background-color: white;
        border: solid black 3px;
        left:72%;
        top: 50%;
        z-index: 3;
    }

    .centro{
        text-align: center;
        color:white;
        background-color: black;
    }
    #botones{
        text-align:center;
        margin-bottom: 15px;
        margin-top: 10px;
    }
    
    #carro{

        font-size: 24px;
        color:white;
	    left: 80%;
	    padding-top: 0.5em;
    }
    .conj1{
        text-align: left;
        color: #000000;
        display: inline-block;
        margin-left:5px;

    }

    .conj2{
        float: right;
        text-align: right;
        color: #000000;
        margin-right:5px;
    }

    .conjunto{
        border: 1px solid black;
        margin-top:5px;
        width:80%;
    }

    .cartlist{
        
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .vaciar {
        background-color: red;
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

    .continuar {
        background-color: green;
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

    #carrito ul{
        padding:0;
    }

    #emcarr{
			
			width:40%;
			min-width:400px;
			height:60%;
			position:absolute;
			left:60%;
		}
		.car{
			margin-left:70%;
			min-width:100px;
			width:25%;
			float:left;
			font-size:20px;
		}
</style>
<!--Carrito  -->
</head>

<header>

        
        
        
    <div class="primero">
        <!-- <div  ><img class="publi" src="Pictures/publi.png" /></div> -->
        <img class="escudo" src="Pictures/escudo.png"> <div id="tit"><h2 > Jovellanos C.F</h2></div>
         <?php if(!empty($user)): ?>
            <div id=emcarr>
                <div class=" email nav">
                    <ul>
                        <li>
                            <a href=""><?= $user['email']; ?></a>
                            <ul>
                                
                                <li><a href="logout.php">Cerrar Sesión</a></li>
                            <?php if($_SESSION['rol']==0): ?>
                                <li><a href="admin.php">Admin</a></li>
                            <?php endif; ?> 
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--Carrito  -->
                <div class="car"><a  onclick="mostrar('carrito')">Carrito 🛒 <?php echo $totalcantidad?></a></div>
            </div>
                <?php else: ?>
             <div id=logreg>    
                <div class="login"><a href="login.php" ><h1>Login<h1></a></div>
                <button class=sing><img class="escudo" src="Pictures/escudob.png"><a href="signup.php" id="regis"> Regístrate</a></button>
            </div>   
            <?php endif; ?>    
    
    <nav>
        

        <ul class="nav">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="estadio.php">Estadio</a></li>
            <li><a href="">Equipos</a>
            <ul>
            
            <li><a href="futbolMasculino.php">Fútbol Masculino</a></li>
            <li><a href="futbolFemenino.php">Fútbol Femenino</a></li>
        </ul>
        
            
            <li><a href="tienda.php">Tienda</a>
            </li>
            <li><a href="entradas.php">Entradas</a></li>
            <!-- <li><a href="">Tour</a></li> -->
        </ul>
                
    </nav>

    <!--Carrito  -->
    <div id="carrito" style="display: none;">
        <div class="centro">
            <h2>Carrito</h2>  
        </div>

        <ul>
            <?php
                if(isset($_SESSION['carrito'])){
                $total = 0;
                for($i=0;$i<=count($carrito_mio)-1;$i++){
                    if(isset($carrito_mio[$i])){
                    if($carrito_mio[$i]!=NULL){
            ?>
            <li class="cartlist">

                <div class="conjunto">
                    <div class="conj1"><span><?php echo $carrito_mio[$i]['nombre']; ?></span></div>
                    <div class="conj2">
                        <span style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precio'] ?> € || Cantidad: <?php echo $carrito_mio[$i]['cantidad']; ?></span>
                    </div>
                </div>

            </li>       

            <?php
                $total = $total +($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                }}}}
            ?>
        </ul>
        <li style="margin-bottom: 30px; margin-top: 30px; font-size:25px;  ">
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
        </li>
        
        <div id="botones">
            <a class="vaciar" type=button href="borrarcarro.php">Vaciar Carrito</a>
            <a class="continuar" type=button href="compra.php">Continuar Pedido</a>
        </div>
    </div>
    <!--Carrito  -->
    </header>