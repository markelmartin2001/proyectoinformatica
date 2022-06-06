<html>
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<footer>

<div class="container-footer-all">
    <div class="container-body">
     <div class="colum1">
         <h1>mas informacion del equipo</h1>
         <p> este equipo esta en </p>
     </div>

     <div class="colum2">
           <h1>redes sociales</h1>
         <div class="row">
             <img src="icon/facebook.png">
            <label>Siguenos en facebook</label>
         </div>

         <div class="row">
             <img src="icon/twitter.png">
            <label>Siguenos en twitter</label>
         </div>

         <div class="row">
             <img src="icon/instagram.png">
            <label>Siguenos en Instagram</label>  
         </div>
     </div>
     
    

         <div class="colum3">
             <h1>Informacion contactos</h1>
             <div class="row2">
                 <img src="icon/house.png">
                 <label> madrid centro calle islas canarias</label>
             </div>

             <div class="row2">
                 <img src="icon/smartphone.png">
                 <label> 628245456</label>
             </div>

             <div class="row2">
                 <img src="icon/contact.png">
                 <label> jovellanos@gmail.com</label>
             </div>
         </div>
            
    
    </div>

    </div>

    <div class="container-footer">
        <div class="footer">
        <div class="copyright">
            @ 2017 Todos los Derechos Reservados
            
            </div>
            <div class="information">
            <a href="href">Informacion Compañia</a>
            <a href="href">Privacion y Politica</a>
            <a href="href">Terminos y Condiciones</a>
            </div>
        </div>
           
    </div>
</footer>
</body>
<style>

*{
    margin:0px;
    padding: 0px;
    box-sizing: border-box;
    font-family:sans-serif;
}
footer{
    width: 100%;
    background: #202020;
    color: white; 
    position: relative;
    top:100%;
    height:300px;

}
.container-footer-all{
    width: 100%;
    max-width: 1200px;
    margin:auto;

    
   
}

.container-body{
    display:flex;
    justify-content: space-between;
}

.colum1{
    max-width: 400px;
}
.colum1 h1{
    font-size:22px;
}
.colum1 p{
    font-size:14px;
    color: #C7C7C7;
    margin-top: 20px;
    
}
.colum2{
    max-width: 400px;
}

.colum2 h1{
    font-size :22px;
}

.row{
    margin-top :20px;
    display: flex;
}

.row img{
    width: 36px;
    height: 36px;
}

.row label{
    margin-top: 10px;
    margin-left: 20px;
    color: #C7C7C7;

}

.colum3{
    max-width: 400px;
}

.colum3 h1{
    font-size:22px;
    
}

.row2{
    margin-top:20px;
    display:flex;
}

.row2 img{
    width: 36px;
    height: 36px;
}

.row2 label{
    margin-left: 20px;
    max-width: 150px;
    margin-top:10px;    
}
.container-footer{
    width: 100%;
    background:#101010;
    
}
.footer{
    max-width:1200px;
    margin: auto;
    justify-content: space-between;
    display:flex
    padding: 20px;
}

.copyright{
    color: #C7C7C7;
}
.copyright {
    text-decoration: none;
    color: white;
    font-weight:bold;

}


.information{
    text-decoration: none;
    color: C#C7C7C7;

}

@media screen and (max-width:1200px){
    .container-body{
        flex-wrap:wrap;
    }
    .colum1{
        max-width: 100%;
    }
    .colum2,
    .colum3{
        margin-top:40px;

    }
}

</style>
</html>