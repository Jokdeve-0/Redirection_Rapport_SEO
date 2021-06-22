<?php
$page==="index"?$json = file_get_contents('./assets/server/liste_erreurs.json'):$json = file_get_contents('../assets/server/liste_erreurs.json');
$Liste_erreurs = (json_decode( $json, true));

if($page==="index"){
    /*Index*/
    $id_error=1;
}else{
    /*error*/
    for($i=0;$i<$id_error;$i++){
        $j=strval($id_error);
        $Liste_this = $Liste_erreurs[$j];
    }
}
$liens = "<p>Sommaire des Problèmes</p>";
$menu_liste = "<p>Acces aux pages Détails</p>";
$i=1;
foreach($Liste_erreurs as $e){
    $select=$e["recommander"]=="select"?'<img src="./assets/styles/img/icon_outils/select.png" alt="selectionné au top dix" width="23" height="18"/>':"";
    $h2=explode('"',$e["h2"]);
    $menu_liste .='<a href="/P4_OC/pages/error.php?id='.$i.'">'.$i.' - '.$h2[1].' '.$select.'</a>';
    $liens .= '<a href="#link_'.$i.'">'.$i.' - '.$h2[1].' '.$select.'</a>';
    $i++;
}
?>