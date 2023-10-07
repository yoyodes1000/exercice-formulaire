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
        

    </form>
</body>
</html>