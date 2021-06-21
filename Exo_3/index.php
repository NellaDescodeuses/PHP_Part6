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
  <div class="row d-flex justify-content-center">
        <div class="col-12">
                <h1 class="text-danger text-center">## Exercice 3 Partie 6</h1>
        <h2>
            Créez un formulaire avec les champs "nom" et "prénom". 
            À l'envoie du formulaire sur une autre page, Affichez les informations saisies. 
            Les champs doivent être renseignés. Vérifiez la saisie.
        </h2>
        <p class="mt-4 text-center">Veuillez entrer les informations demandées.</p>

        </div>
        <!--
            La valeur contenue dans le name="" est la clé qui sert de lien entre mes deux fichiers
            lors de la création de la variable $_POST
            les paramètres n'apparraissent pas dans l'URL avec la méthod="post"
        -->
        <form class="border border-info text-center d-flex-column col-6" action="lien_exo3.php" method="post">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom" required>
            </div>
            <div>
                <label for="civilite">Civilité</label>
                <input class="ml-5" type="radio" name="gender" id="civilite" value="Femme">Femme</input>
                <input class="ml-5" type="radio" name="gender" id="civilite" value="Homme">Homme</input>
                <input class="ml-5" type="radio" name="gender" id="civilite" value="Homme">Autre</input>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</div>
</html>