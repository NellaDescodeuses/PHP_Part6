<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css"
    integrity="undefined" crossorigin="anonymous">
  <title>PHP Exo_6 Part_6</title>
</head>
<body>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12">
        <h1 class="text-danger text-center">## Exercice 5 Partie 6</h1>
        <h2>
        Créez un formulaire avec les champs "civilité", "nom" et "prénom" ainsi qu'un bouton permettant de sélectionner un fichier à envoyer. 
        À l'envoie du formulaire sur la même page, affichez les informations saisies. 
        Les champs doivent être renseignés. Vérifiez la saisie. 
        Empêchez l'affichage de balises html. 
        Le fichier envoyé doit être un pdf.
        </h2>
        <p class="mt-4 text-center">Veuillez entrer les informations demandées.</p>
      </div>
    </div>
     
    <?php
    if(empty($_POST['lastName']) && empty($_POST['firstName'])){      
    ?>
        <!--
        La valeur contenue dans le name="" est la clé qui sert de lien entre mes deux fichiers
        lors de la création de la variable $_POST
        les paramètres n'apparraissent pas dans l'URL avec la méthod="post"
        -->
      <div class="row d-flex justify-content-center">
        <form class="text-center d-flex-column col-6" action="index.php" method="post" enctype="multipart/form-data">
          <div>
            <label for="civilite">Civilité</label>
            <select name="gender">
              <option>Mme</option>
              <option>Mr</option>
              <option>Autre</option>
            </select>
          </div>
          <div class="form-group">
            <label for="lastName">Nom</label>
            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Nom">
          </div>
          <div class="form-group">
            <label for="firstName">Prénom</label>
            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Prénom">
          </div>
          <input class="mt-2 col-12" type="file" name="myFile" id="file">
          <button type="submit" class="mt-2 btn btn-primary">Envoyer</button>
        </form>
      </div>
      <?php
    }
    // $reGex = "/^[A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð][a-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšž]+([-][A-Z][a-z]+)?$/";
    if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['gender']) && isset($_FILES['myFile'])){
      // if(preg_match($reGex, $_POST['lastName']) && preg_match($reGex, $_POST['firstName'])){

      //on récupère le chemin du fichier à uploader
      $infosfichier = pathinfo($_FILES['myFile']['name']);
      //on stocke l'extension du fichier selectionné
      $extension_upload = $infosfichier['extension'];
      //on stocke la chaîne "pdf" dans un tableau
      $extensions_autorisees = array('pdf');
      if(in_array($extension_upload, $extensions_autorisees)) {
        ?>
        <p class="mt-3 text-center">Sexe : <?=  $_POST['gender'] ?></p>
        <p class="mt-3 text-center">Nom : <?= strip_tags($_POST['lastName']) ?></p>
        <p class="mt-3 text-center">Prénom : <?= strip_tags($_POST['firstName']) ?></p>
        <p class="mt-3 text-center">Ficher envoyé : <?= strip_tags($_FILES['myFile']['name']) ?></p>
        
      <?php
      }else{
        ?>
        <p class="mt-5 text-center">Veuillez remplir tous les champs correctement et utiliser un fichier PDF.</p>
        <p class="mt-5 text-center"><a href="index.php">Retour au formulaire</a></p>
        <?php
      }
      } 
      
    ?>
  </div>
</html>