<?php
include_once('connectLangue.php');
$sql= "Select id,libellé from Langue";
$stmt=$connexion->prepare($sql);
$res= $stmt->execute();
$langue= $stmt->fetchALL(PDO::FETCH_ASSOC);
if (!empty($langue))
 {
    $chaine = http_build_query($langue);
    header('location:indexlanguevue.php?'.$chaine);
}else {echo " table vide ";}