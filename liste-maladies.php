<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Acupuncture CPE</title>

    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="style.css" />

</head>

<body>
    
   <h1 class="titre">Acupuncture CPE</h1>
    

    <br>
    
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">ACPE</a>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="./index.php">Acceuil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="./informations.html">Informations</a>
                </li>
                
            </ul>
            
            <u2 class="navbar-nav ml-auto">
                <li class="nav-item active">
                     <a class="nav-link seco" href="./register.html"> Se connecter </a>
                 </li>
                 <li class="nav-item active">
                     <a class="nav-link create" href="./signup.html"> Créer un compte </a>
                 </li>
            </u2>
            
            </div>
        </nav>
        <br>
        <div class="container-fluid texte">
            <p class="para_texte"> Vous avez choisi d'afficher toutes les maladies repertoriées. <br>
                    Vous pouvez toujours affiner votre recherche en utilisant la barre de recherche, ou encore rechercher des pathologies par symptômes.
                    <br>
            </p>
        </div>
        <br> 
        <div class="container">
            <div class="row">
                <form class="BarreRecherche" action="verification-formulaire.php" method="get">
                    
                    <input type="text" size="80" name = "terme" placeholder="Rechercher une pathologie">
                    <button name="rechercher"> Rechercher </button> 
                </form>
            </div> 
            <br> <br>
            <div class="row">

            <div class="col-md-6 mr-auto text-center font-weight-bold">
            <h1 class="text-center font-weight-bold"> Liste des maladies </h1>
            <h3 class="text-center font-weight-light"> Voici la liste complète des pathologies repertoriées dans notre base de données : </h3>

            <?php
                //Connexion à la base de donnée : 

                try {
                $bd = new PDO('pgsql:host=localhost;port=5432;dbname=acudb', 'postgres-tli', 'tli');

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
            </div>

            <div class="col-md-6 ml-auto">
                    <div class="row"><img class="logo" src="./image1.jpg" alt=""></div>
                    <div class="row"><button class="search" type="button">Rechercher les maladies par symptômes </button></div>
            </div>

            </div>
        </div>
    </div>
    <br><br>
</body>

<footer>
    <p>Ce site a été crée par Kylian BOIDARD, Fars BOUAMAR et Mathieu VIAL durant 
        leurs études à CPE. Ils ont plutôt fait ça en auto-didacte. <br>
    Ce site est destiné aux Acupuncteurs, et a pour but de les aider dans leur travail.
    <br> Il s'agit d'un site scolaire, et ses auteurs ne permettent pas sa réutilisation. </p>
    <a href="mentions">Mentions Légales</a>
</footer>
</html>


