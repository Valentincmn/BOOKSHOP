<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Livres</title>
    <link rel="stylesheet" href="../CSS/header 2.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="nav">
        <a href="../ACCUEIL/header 2.php">
            <span id="librai">LIBRAI</span>
            <span id="mid">/</span>
            <span id="book">BOOK</span>
        </a>

        <div class="nav-r">
            <button id="deconnexion">DECONNEXION</button>
            <a href="../COMPTE/Informationcompte.php"><button id="compte">COMPTE</button></a>
            <a href="mes_livres.php"><button id="livre">MES LIVRES</button></a>
        </div>
    </div>

    <div class="page-title">
        <h1>MES LIVRES</h1>
        <p id="emptyText">Aucun livre ajoute pour le moment.</p>
        <a href="../ACCUEIL/header 2.php">
            <button>RECHERCHER UN LIVRE</button>
        </a>
    </div>

    <div id="results"></div>

    <script>
        document.getElementById('deconnexion').addEventListener('click', function() {
            window.location.href = '../ACCUEIL/logout.php';
        });
    </script>
    <script src="../scripts/MesLivres.js"></script>
</body>
</html>
