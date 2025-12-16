<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Élevage de Fu Xing'; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <a href="index.php" class="logo">
                <div class="logo-placeholder">🐕</div>
                <h1>Mon Élevage</h1>
            </a>
            <nav>
                <ul>
                    <li><a href="news.php">News</a></li>
                    <li><a href="about.php">Qui sommes nous ?</a></li>
                    <li><a href="males.php">Nos mâles</a></li>
                    <li><a href="femelles.php">Nos femelles</a></li>
                    <li><a href="chiots.php">Chiots disponibles</a></li>
                    <li><a href="contact.php">Nous contacter</a></li>
                </ul>
            </nav>
            <div class="burger-menu" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <div class="mobile-nav" id="mobileNav">
        <ul>
            <li><a href="news.php" onclick="toggleMenu()">News</a></li>
            <li><a href="about.php" onclick="toggleMenu()">Qui sommes nous ?</a></li>
            <li><a href="males.php" onclick="toggleMenu()">Nos mâles</a></li>
            <li><a href="femelles.php" onclick="toggleMenu()">Nos femelles</a></li>
            <li><a href="chiots.php" onclick="toggleMenu()">Chiots disponibles</a></li>
            <li><a href="contact.php" onclick="toggleMenu()">Nous contacter</a></li>
        </ul>
    </div>