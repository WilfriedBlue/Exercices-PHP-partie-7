<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire PHP</title>
</head>
<body>

<center>

<!-- Créer un formulaire sur la page index.php avec :
Une liste déroulante pour la civilité (Mr ou Mme)
Un champ texte pour le nom
Un champ texte pour le prénom
Ce formulaire doit rediriger vers la page index.php.
Vous avez le choix de la méthode. -->

<?php
if (isset($_POST['civilite']) AND isset($_POST['nom']) AND isset($_POST['nom']) && $_POST['civilite'] AND $_POST['nom'] AND $_POST['prenom']){

    echo "Bonjour " . $_POST['civilite'] . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'] . ' <br />' ;

}
else {
    echo "<h3>Formulaire final</h3>
              <form method='POST' action='index.php'>
             <fieldset>
            <p>

            <select name='civilite'>
                <option>Mr</option> 
                <option>Mme</option>
            </select>
            <br><br>
            <label for='nom'>Nom :</label>
            <input type='text' name='nom' id='nom' />
            <br><br>
            <label for='prenom'>Prénom :</label>
            <input type='text' name='prenom' id='prenom' />
            <br><br>
            <input type='submit' value='Envoyer'>
        
        </p>
        </fieldset>
        </form>";
   
};

?>
</center>

</body>
</html>