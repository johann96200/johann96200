<?php
include_once("connectLangue.php");
if( isset($_POST['libelle']))
{
    $sql='INSERT INTO `Langue`(`libellé`) VALUES (:libelle)';
    $stmt=$connexion->prepare($sql);
    $resultat=$stmt->execute(array(':libelle'=>$_POST['libelle']));

    
  if (!empty($resultat)){

    header('location:findalllanguecontroller.php');
  }
  else {

    header('location:langueform.php');
  }
}else echo 'erreur post';
?>