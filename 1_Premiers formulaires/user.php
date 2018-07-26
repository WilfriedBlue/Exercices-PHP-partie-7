<?php

// Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.

if (isset($_GET['nom']) AND isset($_GET['prenom']) && $_GET['nom'] AND $_GET['prenom']){

    echo $_GET['nom'] . ' ' . $_GET['prenom'] . ' <br />';

}

//Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.

else if (isset($_POST['nom']) AND isset($_POST['prenom']) && $_POST['nom'] AND $_POST['prenom']){

    echo $_POST['nom'] . ' ' . $_POST['prenom'] . ' <br />';

}
else {
    echo 'Diantre ! Il manque des infos';
};

