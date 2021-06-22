<?php 
include_once '../assets/server/controller_rapports.php';include_once '../assets/server/liste_rapports.php';include_once '../assets/server/controller_modal.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="raport SEO & accessibilité du projet 4 openclassrooms">
    <link rel="icon" href="../assets/styles/img/icon_outils/favicon.png" />
    <title>Rapport_<?=$Liste_this["outil"]?></title>
    <link rel="stylesheet" href="../assets/styles/css/public/main.css">
</head>
<body id="top_page">
    <header>
        <a href="../index.php" aria-label="retour à l'acceuil"><img src="../assets/styles/img/icon_outils/arrow.svg" alt="retourner à l'acceuil" width="50" height="50"></a>

        
        <a href="#top_page"><img id="btn-return" src="../assets/styles/img/icon_outils/arrow.svg" alt="fleche vers le haut" aria-label="Retourner en haut de la page"></a>
    <h1>Rapport-<?=$Liste_this["outil"]?></h1>
    </header>
    <main class="page_erreur">
    <section id="identification">
        <h2>Audit : Page d'acceuil</h2>
        <h3>Plateforme : <?=$Liste_this["plate"]["1"]?></h3>
        <h4>Avant les corrections</h4>
        <?php if(isset($Liste_this["link"]["doc"])):?>
        <p>Cliquez sur l'image pour accéder au rapport.</p>
        <?php endif;?>
        <figure>
            <?php if(isset($Liste_this["link"]["doc"])):?>
                <a href="<?=$Liste_this["link"]["doc"]?>" target="_blank">
            <?php endif;?>
            <img id="myImg_<?=$id_modal?>" class="clickImg" src="<?=$Liste_this["link"]["img1"]?>" alt="Problème">
            <?php if(isset($Liste_this["link"]["doc"])):?>
                </a>
            <?php else:?>
                    <div id="myModal_<?=$id_modal?>" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img_<?=$id_modal?>">
                        <div class="caption"><?=$Liste_this["link"]["fig"]?></div>
                    </div>
            <?php endif;?>
                    <figcaption><?=$Liste_this["link"]["fig"]?></figcaption>
        </figure>
        <h4>Après les corrections</h4>
        <figure>
            <?php if(isset($Liste_this["link2"]["doc"])):?>
                <a href="<?=$Liste_this["link2"]["doc"]?>" target="_blank">
            <?php endif;?>
            <img id="myImg_<?=$id_modal+1?>" class="clickImg" src="<?=$Liste_this["link2"]["img1"]?>" alt="Problème">
            <?php if(isset($Liste_this["link2"]["doc"])):?>
                </a>
                <?php else:?>
                    <div id="myModal_<?=$id_modal+1?>" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img_<?=$id_modal+1?>">
                        <div class="caption"><?=$Liste_this["link2"]["fig"]?></div>
                    </div>
            <?php endif;?>
            <figcaption><?=$Liste_this["link2"]["fig"]?></figcaption>
        </figure>
    </section>
    <section>
        <h2>Audit : Page de contact</h2>
        <h3>Plateforme : 
        <?php if(isset($Liste_this["plate"]["2"])){
            echo $Liste_this["plate"]["2"];
        }else{
            echo $Liste_this["plate"]["1"];
        }?>
        
        </h3>
        <h4>Avant les corrections</h4>
        <figure>
            <?php if(isset($Liste_this["link3"]["doc"])):?>
                <a href="<?=$Liste_this["link3"]["doc"]?>" target="_blank">
            <?php endif;?>
                <img id="myImg_<?=$id_modal+2?>" class="clickImg" src="<?=$Liste_this["link3"]["img1"]?>" alt="Problème">
            <?php if(isset($Liste_this["link3"]["doc"])):?>
                </a>
                <?php else:?>
                    <div id="myModal_<?=$id_modal+2?>" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img_<?=$id_modal+2?>">
                        <div class="caption"><?=$Liste_this["link3"]["fig"]?></div>
                    </div>
            <?php endif;?>
            <figcaption><?=$Liste_this["link3"]["fig"]?></figcaption>
        </figure>
        <h4>Après les corrections</h4>
        <figure>
            <?php if(isset($Liste_this["link4"]["doc"])):?>
                <a href="<?=$Liste_this["link4"]["doc"]?>" target="_blank">
            <?php endif;?>
                <img id="myImg_<?=$id_modal+3?>" class="clickImg" src="<?=$Liste_this["link4"]["img1"]?>" alt="Problème">
            <?php if(isset($Liste_this["link4"]["doc"])):?>
                </a>
                <?php else:?>
                    <div id="myModal_<?=$id_modal+3?>" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img_<?=$id_modal+3?>">
                        <div class="caption"><?=$Liste_this["link4"]["fig"]?></div>
                    </div>
            <?php endif;?>
            <figcaption><?=$Liste_this["link4"]["fig"]?></figcaption>
        </figure>
    </section>
    <footer>
            <nav>
            <?php 
                if($id_error > 1) {echo'<a href="rapport.php?id='.($id_error-1).'">&nbsp;&nbsp;&lt;&lt; Rapport précédent</a>';}
                if($id_error < 4) {echo'<a href="rapport.php?id='.($id_error+1).'">Rapport suivant &nbsp;&nbsp;&gt;&gt;</a>';}
                ?>
            </nav>
        </footer>
    </main>
    <script>
        var modals=document.getElementsByClassName('clickImg');
        for(var i=0;i<modals.length;i++){
            <?php $id_this = $id_modal+$count; $count++; ?>
            var modal_<?=$id_this?>= document.getElementById('myModal_'+(<?=$id_modal?>+i));
            var img_1 = document.getElementById('img_'+(<?=$id_modal?>+i));
            var span = document.getElementsByClassName("close")[i];
            modals[i].onclick = function(){
                modal_<?=$id_this?>.style.display = "block";
                img_1.src = this.src;
                span.onclick = function() { 
                    modal_<?=$id_this?>.style.display = "none";
                }
            }
        }
</script>
</body>
</html>