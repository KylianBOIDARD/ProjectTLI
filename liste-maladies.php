<?php
//Connexion à la base de donnée : 

try {
$bd = new PDO('pgsql:host=localhost;port=5432;dbname=acudb', 'postgres-tli', 'tli');


echo 'Voici la liste de toutes les pathologies dans notre base de données.';
echo "<br>";
echo '---------------------------------------------------------------------------------------------------------------------------------------------------------------';


//requete sql pour toutes les descriptions de maladies
$maladies = $bd->query('SELECT * FROM patho');

// execturer ta requete
// On affiche ça sur la page php.

while( $resultMALADIE = $maladies->fetch()){
echo '<br>';
echo '<br>';
echo $resultMALADIE['desc'];
}

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>




