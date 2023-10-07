

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Merci <?= $_POST['prenom'] . ' ' . $_POST['nom'] ?> de nous avoir contacté à propos de "<?= $_POST['sujet'] ?>".<br>Un de nos conseillers vous contactera soit à l'adresse <?= $_POST['mail'] ?> soit par téléphone au <?= $_POST['telephone'] ?> dans les plus brefs délais pour traite votre demande : <?= $_POST['message'] ?></p>
</body>
</html>