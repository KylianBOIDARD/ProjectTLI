<meta charset="utf-8" />
<?php
 
$bdd = new PDO('pgsql:host=localhost;port=5432;dbname=acudb', 'postgres-tli', 'tli');
 
$terme = $bdd->query('SELECT "desc" FROM patho');
if(isset($_GET['terme']) AND !empty($_GET['terme'])) {
   $q = htmlspecialchars($_GET['terme']);
   $terme = $bdd->query('SELECT * FROM patho WHERE "desc" LIKE \'%'.$q.'%\'');
   //var_dump($terme);
   //var_dump($bdd->errorInfo());
   }

?>

</form>
   <ul>
   <?php while($a = $terme->fetch()) { ?>
      <li><?= $a["desc"] ?></li>
   <?php } ?>
   </ul>
