<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form action="thanks.php" method="post">

        <div>
            <label for="prenom">Prénom :</label>
            <br>
            <input type="text" id="prenom" name="prenom" required>
            <br><br>
        </div>

        <div>
            <label for="nom">Nom :</label>
            <br>
            <input type="text" id="nom" name="nom" required>
            <br><br>
        </div>

        <div>
            <label for="telephone">Téléphone :</label>
            <br>
            <input type="tel" id="telephone" name="telephone" required>
            <br><br>
        </div>

        <div>
            <label for="mail">Mail :</label>
            <br>
            <input type="email" id="mail" name="mail" required>
            <br><br>
        </div>
        
        <div>
            <label for="sujet">Quel est votre problème?</label>
            <br>
            <select id="sujet" name="sujet" required>
                <option value="Panne d'orndiateur">Panne d'ordinateur</option>
                <option value="Machine à laver cassée">Machine à laver cassée</option>
                <option value="Sèche linge cassé">Sèche linge cassé</option>
                <option value="Robinet qui fuit">Robinet qui fuit</option>
                <option value="attaque de zombies radioactifs">Attaque de zombies radioactifs</option>
            </select>
            <br><br>
        </div>

        <div>
            <label for="message">message :</label>
            <br>
            <textarea type="text" id="message" name="message">
            </textarea>
            <br><br>
        </div>

        <div  class="button">
            <button  type="submit">Soumettre votre demande</button>
        </div>
        

        <?php 
    
    $errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') { 
        if(!isset($_POST['prenom']) || trim($_POST['prenom']) === '') 
            $errors[] = "Le prénom est obligatoire";
            if(!isset($_POST['nom']) || trim($_POST['nom']) === '') 
            $errors[] = "Le nom est obligatoire";
        if(!isset($_POST['telephone']) || trim($_POST['telephone']) === '') 
            $errors[] = "Le numéro de téléphone est obligatoire";
        if(!isset($_POST['mail']) || trim($_POST['mail']) === '' || filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) 
            $errors[] = "L'adresse mail est obligatoire";
        if(!isset($_POST['sujet']) || trim($_POST['sujet']) === '') 
            $errors[] = "Il faut choisir un sujet";
        if(!isset($_POST['message']) || trim($_POST['message']) === '') 
            $errors[] = "Un message est obligatoire et fait toujours plaisir";
    }


    
    ?>

    </form>
</body>
</html>