<?php
try {
$connexion = new PDO('mysql:host=localhost;dbname=crossfit;port=8889' , 'root', 'root' );
} 

catch (PDOException $e)
{
echo 'Échec lors de la connexion : ' . $e->getMessage();
}

?>