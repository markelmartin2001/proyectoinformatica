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
    function mostrar() {
    var x = document.getElementById("carrito");
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
        width:20%;
        min-height:20%;
        background-color: gray;
        display: none;
        border-radius: 25px;
        left:80%;
        top: 12%;
        z-index: 3;
    }

    .centro{
        text-align: center;
    }
    #vaciar{
        position: absolute;
        left: 35%;
        bottom: 5px;
    }
    #carro{
        font-size: 24px;
        color:white;
	    left: 80%;
	    padding-top: 0.5em;
    }
</style>
<!--Carrito  -->
</head>

<header>

        
        <div style="max-width:5em; display: inline-block; position:absolute" ><img src="Pictures/publi.png" /></div>
        
        <ul class="primero">
       
        <img id="escudo" src="Pictures/escudo.png"> <p id="letra"> Jovellanos C.F</p>
         <?php if(!empty($user)): ?>
                <li><div id = usuario><?= $user['email']; ?></div></li>
                <!--Carrito  -->
                <li id= carro><a  onclick="mostrar()">Carrito 🛒</a></li>
                <!--Carrito  -->
                <li id = logout><a href="logout.php" id="logout">Logout</a></li>
            <?php else: ?>
                 <img id="imglog" src="Pictures/login.png"><li><a href="login.php" id="login"><h1>Login<h1></a></li>
                <li><a href="signup.php" id="regis"> <img id="escudo5" src="Pictures/escudob.png">Regístrate</a></li>
                
            <?php endif; ?>    
        </ul>
    
    <nav>
        

        <ul class="nav">
            <li><a href="index.php">Inicio</a></li>
            
            <li><a href="futbolMasculino.php">Fútbol Masculino</a>
                <ul>
                    <li><a href="">Primer Equipo</a></li>
                    <li><a href="">Cantera</a></li>
                    <li><a href="">Escuela</a></li>

            </li>
        </ul>
        </li>
        <li><a href="futbolFemenino.php">Fútbol Femenino</a>
            <ul>
                <li><a href="">Primer Equipo</a></li>
                <li><a href="">Cantera</a></li>
                <li><a href="">Escuela</a></li>

            </ul>
        </li>



        <li><a href="estadio.php">Estadio</a>

        </li>
        </ul>
        <ul class="derech">
            <li><a href="tienda.php">Tienda</a>
                <ul>
                    <li><a href="">Ropa hombre</a></li>
                    <li><a href="">Ropa mujer</a></li>
                </ul>
            </li>
            <li><a href="entradas.php">Entradas</a></li>
            <li><a href="">Tour</a></li>
            
            
        </ul>


    </nav>

    <!--Carrito  -->
    <div id="carrito">
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

                <div class="row col-12">
                    <div class="col-6 p-0" style="text-align: left; color: #000000;"><h6>Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['nombre']; ?></div>
                    <div class="col-6 p-0" style="text-align: right; color: #000000;">
                        <span style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precio'] ?> : <?php echo $carrito_mio[$i]['cantidad']; ?></span>
                    </div>
                </div>

            </li>       

            <?php
                $total = $total +($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                }}}}
            ?>
        </ul>
        <li>
            <span>Total (EUR)</span>
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
        
        <div id="vaciar"><a type=button style= margin-top:10px href="borrarcarro.php">Vaciar Carrito</a></div>
    </div>
    <!--Carrito  -->
    </header>