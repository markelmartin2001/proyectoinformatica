<header>

        <div class="publi">
            <img src="Pictures/publi.jpg" />
        </div>
        <ul class="primero">
            <?php if(!empty($user)): ?>
                <li><div id = usuario><?= $user['email']; ?></div></li>
                <li id = logout><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="signup.php">Regístrate</a></li>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>    
            <li><a href="">Idioma</a>
                <ul>
                    <li><a href="">Español</a></li>
                    <li><a href="">Inglés</a></li>
                </ul></li>
        </ul>
    
    <nav>
        <img id="escudo" src="Pictures/escudo.png">
        <p id="letra">Jovellanos C.F</p>

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
    </header>