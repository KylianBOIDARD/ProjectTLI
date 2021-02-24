<?php
//Connexion à la base de donnée :



try {​​
$bd = new PDO('pgsql:host=localhost;port=5432;dbname=acudb', 'postgres-tli', 'tli');




echo 'connexion réussie';



}​​ catch (PDOException $e) {​​
echo 'Connexion échouée : ' . $e->getMessage();
}​​



?>