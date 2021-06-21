<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">  <title>PHP Exo_1 Part_6</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 1 Partie 6</h1>
    <h2>
        Créez un formulaire avec les champs "nom" et "prénom". À l'envoie du formulaire sur une autre page, Affichez les informations saisies.
    </h2>
    </h2>
    <?php
    /*
      -trim() = supprime certains charactères, retour de lignes, les espaces inutiles...
      -htmlspecialchars() = évite que le html soit interprété.
      -striplashes() = retire les anti-slashs
     */
    
      $nom = $prenom = '';
      //je crée une  fonction qui va effectué les tests sur une variable $donnees en paramètre.
      function securityInput($donnees){
        //renvoie la variable $donnees une fois trim() 
        $donnees = trim($donnees);
        //renvoie la variable $donnees une fois htmlspecialchars() 
        $donnees = htmlspecialchars($donnees);
        //renvoie la variable $donnees une fois stripslashes() 
        $donnees = stripslashes($donnees);
        //retourne $donnees avec les 3 méthodes
        return $donnees;
      }
      /*
      je passe à ma fonction les variables $_POST[] qui représente le paramètre $donnees
      -j'effectue les tests sur chacunes de mes variables
      -j'affecte à mes variables le résultat de 
      */ 

      $prenom = securityInput($_POST['prenom']);
      $nom = securityInput($_POST['nom']);
    ?>

    <p class="mt-5 text-center">Les informations rentrées dans le formulaire : </p>
    <p class="mt-3 text-center"><?= 'Nom : ' . $nom ?></p>
    <p class="mt-3 text-center"><?= 'Prénom : ' . $prenom ?></p>

    <p class="mt-5 ml text-center"><a href="index.php">Lien</a></p>

  </div>
</html>