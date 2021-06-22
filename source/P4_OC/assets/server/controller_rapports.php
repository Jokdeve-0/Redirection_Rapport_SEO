<?php
$page="rapports";
$id_error = isset($_GET['id'])?(int)$_GET['id']: false;
if($id_error==false){echo'<a href="../index.php">Oups ! Une erreur est survenue. Veuillez cliquez ici pour retournez sur l\'acceuil</a>';exit();}
?>