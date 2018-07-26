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
if (isset($_POST['civilite']) AND isset($_POST['nom']) AND isset($_POST['nom']) AND isset($_POST['fichier']) && $_POST['civilite'] AND $_POST['nom'] AND $_POST['prenom'] AND $_POST['fichier']){

    echo "Bonjour " . $_POST['civilite'] . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'] .  ', ' . $_POST['fichier'] . ' a bien été envoyé. <br />' ;
    
    if ( pathinfo($_POST['fichier'],  PATHINFO_EXTENSION) == 'pdf') {
        echo "<br> Merci, votre fichier est un pdf";
    }
    else { echo "<br> Votre fichier n'est pas en pdf";
    }
}
else {
    echo "<h3>Formulaire final</h3>
         <form method='POST' action='index.php'>
             <fieldset>
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
            <label for='fichier'>Votre fichier :</label>
            <input type='file' name='fichier' />
            <br><br>
            <input type='submit' value='Envoyer'>
            </fieldset>
        </form>";
   
};

?>
</center>

</body>
</html>