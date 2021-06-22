<hr>
<section id="erreurs" title="Rlelevé des erreurs">
    <h2 class="closer" id="clo_4"> <img src="./assets/styles/img/icon_outils/ico_menu.png" alt="Ouvrir la section" width="50" height="50"> Le relevé des Problèmes</h2>
    <div class="hide" id="hide_4">
        <div id="legende">
            <img src="./assets/styles/img/icon_outils/select.png" alt="selectionné au top dix" width="32" height="23" id="slt"/><cite> *Les recommandations séléctionnées</cite>
        </div>
        <div id="table_erreurs">
            <div class="box-tete">
                <div class="ligne">
                    <span>Catégorie</span>
                    <span>Identification</span>
                    <span>Bonne pratique</span>
                    <span>Corrections</span>
                </div>
            </div>
            <div class="box-ligne" id="tbody_erreurs">
                <?php foreach($Liste_erreurs as $e):?>
                <div class="ligne" id="link_<?=$id_link?>">
                    <span>
                        <?=$e["categories"]?><br>Problème-<?=$id_error?><br>
                        <?php if($e["recommander"] == "select"):?>
                            <img src="./assets/styles/img/icon_outils/select.png" alt="selectionné au top dix" width="93" height="63"/>
                        <?php endif;?>
                    </span>
                    <span><strong><?=$e["h2"]?></strong><?=substr(str_replace("<br>","",$e["p1"]),0,100)?>...</span>
                    <span><?=substr(str_replace("<br>","",$e["notes"]),0,200)?>...</span>
                    <span class="valid"><a aria-label="Détails sur l'Problème <?=$id_error?>" href="./pages/error.php?id=<?=$id_error?>">Détails</a></span>
                </div>
                <?php $id_error++;$id_link++;endforeach;?>
            </div>
        </div>
    </div>
</section>