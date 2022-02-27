<?php
include_once("connect.php");
if(isset($_POST['mail']) && isset($_POST['mdp']))
{
    $sql='select id, nom, prenom, mail, role from user where mail=:mail and mdp=:mdp';
    $stmt=$connexion->prepare($sql);
    $resultat=$stmt->execute(array(':mail'=>$_POST['mail'], ':mdp'=>$_POST['mdp']));

    $user=$stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($user);
}
?>