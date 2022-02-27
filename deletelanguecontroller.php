<?php

include_once('connectLangue.php');

if (isset($_GET['id'])){
    $sql='DELETE FROM Langue WHERE id=:id';
    $stmt= $connexion ->prepare($sql);
    $resultat = $stmt-> execute(array(':id'=>$_GET['id']));
    //var_dump($resultat);

if(!empty($resultat)){
    header('location:findalllanguecontroller.php');
                      


}





}

?>