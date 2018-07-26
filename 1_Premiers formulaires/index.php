<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire PHP</title>
</head>
<body>

<center>
<!-- Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET. -->
<h3>Formulaire GET</h3>
<form method="GET" action="user.php">
<fieldset>

   <p>

       <label for="nom">Nom :</label>
       <input type="text" name="nom" id="nom" />
       <br>
       <label for="prenom">Prénom :</label>
       <input type="text" name="prenom" id="prenom" />
       <br>
       <input type="submit" value="Envoyer">
       

   </p>
   </fieldset>
</form>

<br><br>

<!-- Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST. -->
<h3>Formulaire POST</h3>
<form method="POST" action="user.php">
<fieldset>
<p>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" />
    <br>
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" />
    <br>
    <input type="submit" value="Envoyer">
    

</p>
</fieldset>
</form>

</center>

</body>
</html>