<?php

include_once('connectLangue.php');

if (isset($_GET['id'])){
    $sql='SELECT id , libellé from langue WHERE id=:id';
    $stmt= $connexion ->prepare($sql);
    $resultat = $stmt-> execute(array(':id'=>$_GET['id']));
    $langue=$stmt->fetch(PDO::FETCH_ASSOC);
    //var_dump($resultat);

if(!empty($langue)){
    $chaine = http_build_query($langue);
    header('location:showlanguevue.php?'.$chaine);
                      


}





}

?>