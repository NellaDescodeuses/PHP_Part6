<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
            if (empty($_POST['firstnameForm']) && empty($_POST['lastnameForm'])) {
                ?>
            <form method="post" action="copy.php">
                <select name="civilite">
                    <option>Mr</option>
                    <option>Mme</option>
                </select>
                <label>Nom</label>
                <input type="text" name="lastName" placeholder="Votre nom">
                <label>Prénom</label>
                <input type="text" name="firstName" placeholder="Votre prénom">
                <input type="submit" name="valider" value="Valider"/>
            </form>
            <?php
      $verifName = "/^[A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð][a-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšž]+([-][A-Z][a-z]+)?$/";
      if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['civilite'])){
          if(preg_match($verifName, $_POST['lastName']) && preg_match($verifName, $_POST['firstName'])){
         echo 'Bonjour '. ' ' . $_POST['civilite']. ' ' . $_POST['firstName']. ' ' . $_POST['lastName'];
          }else{
             echo ' Veuillez vérifier votre saisie !';
          }
     }
     
     }
        ?>
  
</body>
</html>