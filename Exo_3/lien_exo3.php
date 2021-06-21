<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">  <title>PHP Exo_1 Part_6</title>
  <title>PHP Exo_3 Part_6</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 3 Partie 6</h1>
    <h2>
      Créez un formulaire avec les champs "civilité", "nom" et "prénom". 
      À l'envoie du formulaire sur une autre page, Affichez les informations saisies. 
      Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'inclusion de balises html.
    </h2>
    <p class="mt-5 text-center">Les informations rentrées dans le formulaire : </p>

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
      $gender = securityInput($_POST['gender']);
      $regex = "/^[A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð][a-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšž]+([-][A-Z][a-z]+)?$/";
     
      if(preg_match($regex, $nom) && preg_match($regex, $prenom) &&  !empty($gender)){
        ?>
          <p class="mt-3 text-center"><?= 'Nom : ' . $nom ?></p>
          <p class="mt-3 text-center"><?= 'Prénom : ' . $prenom ?></p>
          <p class="mt-3 text-center"><?= 'Sexe : ' . $gender ?></p>
        <?php
      }else{
        ?>
        <p class="mt-5 text-center">Veuillez remplir tous les champs correctement</p>
        <?php
      }
    ?>
    <p class="mt-5 text-center"><a href="index.php">Lien</a></p>
    </div>
  </html>