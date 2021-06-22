<?php
$json = file_get_contents('../assets/server/liste_rapports.json');
$Liste_rapports = (json_decode( $json, true));
for($i=0;$i<$id_error;$i++){
    $j=strval($id_error);
    $Liste_this = $Liste_rapports[$j];
}

?>