    <!DOCTYPE html>
<html>
  <?php
      $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=acudb', 'postgres-tli', 'tli');

      if (isset($_GET["rechercher"]) AND $_GET["rechercher"] == "Rechercher") {
      $_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les failles html
      $terme = $_GET["terme"];
      $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
      $terme = strip_tags($terme); //pour supprimer les balises html dans la requête

      }

      if (isset($terme))
      {
      $terme = strtolower($terme);
      $select_terme = $bdd->prepare("SELECT * FROM patho WHERE * LIKE ?");
      $select_terme->execute(array("%".$terme."%"));
      }
      else
      {
      $message = "Vous devez entrer votre requete dans la barre de recherche";
      }
  ?>


 <head>
  <meta charset = "utf-8" >
  <title>Les résultats de recherche</title>
 </head>
 <body>
  <?php
  while($terme_trouve = $select_terme->fetch())
  {
   echo "<div><p> ".$terme_trouve['desc']."</p>";
  }
  $select_terme->closeCursor();
   ?>
 </body>
</html>