<?php include_once 'assets/server/controller_erreur.php'; include_once 'assets/server/liste.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="raport SEO & accessibilité du projet 4 openclassrooms">
    <link rel="icon" href="assets/styles/img/icon_outils/favicon.png" />
    <meta name="author" content="@Jokdeve">
    <title>Rapport SEO et Accessibilité</title>
    <link rel="stylesheet" href="assets/styles/css/public/main.css">
</head>
<body id="top_page">
    <?php 
        include './includes/header.php';
        echo'<main>';
        include './includes/menuDesk.php';
        include './includes/btn_return.php';
        include './includes/notes.php';
        include './includes/outils_analyse.php';
        include './includes/outils_auto.php';
        include './includes/outils_rapport.php';
        include './includes/erreurs.php';
        include './includes/screenshot.php';
        echo'</main>';
    ?>
    <footer>
        <a href="https://addictocode.fr" target="_blank">Addictocode.fr</a> by <a href="https://github.com/Jokdeve-0" target="_blank">@Jokdeve</a> 
    </footer>
    <script src="assets/js/jquery-v3.6.0.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>