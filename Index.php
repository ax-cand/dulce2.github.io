<?php

    session_start();

    if(!isset($_SESSION['celular'])){
        echo'
        <script>
        alert("Por Favor Inicia Sesión")
        ';
       header("location: Index.php");
    
       session_destroy();
       die();
    }
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dulcería AX </title>
    <link rel="shortcut icon" href="IM" type="image/x-icon">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/style.css">

</head>

<body>

    <header class="header">
        <nav class="nav container">
            <div class="nav_logo">
                <img class="Paletita" src="Img/paletita.png" alt="">
            </div>

            <ul class="nav_link">
                <li class="nav_items">
                    <a href="Galletas.php" class="nav_links"> Galletas  </a>
                </li>
                <li class="nav_items">
                    <a href="Bebidas.php" class="nav_links"> Bebidas </a>
                </li>
                <li class="nav_items">
                    <a href="Chocolates.php" class="nav_links"> Chocolates </a>
                </li>
                <li class="nav_items">
                    <a href="Botanas.php" class="nav_links"> Botanas </a>
                </li>
                <li class="nav_items">
                    <a href="PHP/cerrar_sesion.php" class="nav_links"> Cerrar Sesión </a>
                </li>
            </ul>

        </nav>

        <section class="hero_container container">
            <h1 class="hero_title"> DULCERÍA AX </h1>
            <p class="hero_paragraph"> Conoce nuestros increíbles productos </p>
            <a href="todo.html" class="cta"> Ir </a>
        </section>
    </header>

</body>

</html>