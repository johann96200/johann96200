
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            
            try{
                $connexion = new PDO("mysql:host=$servername;dbname=crossfit", $username, $password);
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connexion réussie';
            }
            
    
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>
    