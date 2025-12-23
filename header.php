<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Élévage de Fu Xing</title>
</head>

<body>
    <!-- ########## HEADER ########### -->
    <header>
        <div class="header-container">
            <!-- ############ NAVIGATION ########## -->
            <a href="index.php" class="logo">
                <div class="logo-placeholder"><img src="./assets/img/logo.png" alt=""></div>
                <h1>Les Shih tzu <br> de Fu Xing</h1>
            </a>
            <nav>
                <ul>
                    <li><a href="#news">News</a></li>
                    <li><a href="./a_propos.html">Qui sommes nous ?</a></li>
                    <li><a href="./males.php">Nos mâles</a></li>
                    <li><a href="#femelles">Nos femelles</a></li>
                    <li><a href="#chiots">Chiots disponibles</a></li>
                    <li><a href="#contact">Nous contacter</a></li>
                </ul>
            </nav>
             <!-- ############ BURGER MENU ########## -->
            <div class="burger-menu" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <div class="mobile-nav" id="mobileNav">
        <ul>
            <li><a href="#news" onclick="toggleMenu()">News</a></li>
            <li><a href="./a_propos.html" onclick="toggleMenu()">Qui sommes nous ?</a></li>
            <li><a href="#males" onclick="toggleMenu()">Nos mâles</a></li>
            <li><a href="#femelles" onclick="toggleMenu()">Nos femelles</a></li>
            <li><a href="#chiots" onclick="toggleMenu()">Chiots disponibles</a></li>
            <li><a href="#contact" onclick="toggleMenu()">Nous contacter</a></li>
        </ul>
    </div>