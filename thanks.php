

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["mail"];
    $telephone = $_POST["telephone"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];

    if (empty($errors)) {
        echo    
    "Merci  $prenom $nom de nous avoir contacté à propos de $sujet. Un de nos conseillers vous contactera soit à l'adresse  $email soit par téléphone au $telephone dans les plus brefs délais pour traite votre demande : $message.";
    } ?>
</body>
</html>