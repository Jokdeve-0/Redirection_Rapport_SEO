<?php include_once '../assets/server/controller_details.php'; include_once '../assets/server/liste.php';include_once '../assets/server/controller_modal.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="raport SEO & accessibilité du projet 4 openclassrooms">
    <link rel="icon" href="../assets/styles/img/icon_outils/favicon.png" />
    <title>Error_<?=$id_error?></title>
    <link rel="stylesheet" href="../assets/styles/css/public/main.css">
</head>
<body id="top_page">
    <header>
        <a href="../index.php" aria-label="retour à l'acceuil"><img src="../assets/styles/img/icon_outils/arrow.svg" alt="retourner à l'acceuil" width="50" height="50"></a>
        <a href="#top_page"><img id="btn-return" src="../assets/styles/img/icon_outils/arrow.svg" alt="fleche vers le haut" aria-label="Retourner en haut de la page"></a>
        <h1><?=$Liste_this["categories"]?> Problème - <?=$id_error?>
        <?php if($Liste_this["recommander"] == "select"):?>
            <img src="../assets/styles/img/icon_outils/select.png" alt="selectionné au top dix" width="93" height="63"/>
        <?php endif;?>
        </h1>
    </header>
    <main class="page_erreur">
        <section id="identification">
            <h2><strong><?=$Liste_this["h2"]?></strong></h2>
            <p><?=$Liste_this["p1"]?></p>
        </section>
        <section>
            <h2>Outils</h2>
            <h3>
            <?php echo(isset($Liste_this["img_outil"]["a"])?'<a href="'.$Liste_this['img_outil']['a'].'" target="_blank">': false);?>
            <img src="<?=$Liste_this["img_outil"]["url"]?>" alt="<?=$Liste_this["img_outil"]["alt"]?>" width="50" height="50"><?=$Liste_this["img_outil"]["alt"]?>
            <?php echo(isset($Liste_this["img_outil"]["a"])?'</a>':false);?>
            </h3>
            <figure>
                <img id="myImg_<?=$id_modal?>" class="clickImg" src="<?=$Liste_this["img_erreur"]["url"]?>" alt="Problème <?=$Liste_this["img_outil"]["alt"]?>">
                <div id="myModal_<?=$id_modal?>" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img_<?=$id_modal?>">
                    <div class="caption"><?=$Liste_this["img_erreur"]["fig"]?></div>
                </div>
                <figcaption><?=$Liste_this["img_erreur"]["fig"]?></figcaption>
            </figure>
        </section>
        <section id="correction">
            <h2>correction</h2>
            <h3><strong>Notes</strong></h3>
            <p><?=$Liste_this["notes"]?></p>
            <h3><strong><?=$Liste_this["h3"]?></strong></h3>
            <p><?=$Liste_this["p2"]?></p>
            <?php if(isset($Liste_this["img_correction"])):?>
            <figure>
                <img id="myImg_<?=$id_modal+1?>" class="clickImg" src="<?=$Liste_this["img_correction"]["url"]?>" alt="photo code">
                <div id="myModal_<?=$id_modal+1?>" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img_<?=$id_modal+1?>">
                    <div class="caption"><?=$Liste_this["img_correction"]["fig"]?></div>
                </div>
                <figcaption><?=$Liste_this["img_correction"]["fig"]?></figcaption>
            </figure>
            <?php endif;?>
            <?php if(isset($Liste_this["img_correction2"])):?>
                <figure>
                    <img id="myImg_<?=$id_modal+2?>" class="clickImg" src="<?=$Liste_this["img_correction2"]["url"]?>" alt="photo code">
                    <div id="myModal_<?=$id_modal+2?>" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img_<?=$id_modal+2?>">
                        <div class="caption"><?=$Liste_this["img_correction2"]["fig"]?></div>
                    </div>
                    <figcaption><?=$Liste_this["img_correction2"]["fig"]?></figcaption>
                </figure>
            <?php endif;?>
        </section>
        <footer>
            <nav>
                <?php 
                if($id_error > 1) {echo'<a href="error.php?id='.($id_error-1).'">&nbsp;&nbsp;&lt;&lt; Précédent</a>';}
                if($id_error < 23) {echo'<a href="error.php?id='.($id_error+1).'">Suivant &nbsp;&nbsp;&gt;&gt;</a>';}
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