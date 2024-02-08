<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>

<!-- SERA AFFICHER SUR LE MAIL -->


    <?php
    
    $retour = mail('alkarshi.abdullrahman@gmail.com','Contacté depuis le formulaire via le Site PC-CLEANER par ' . $_POST['MAIL'].' | Objet : '.$_POST['OBJET'], $_POST['MESSAGE'], '');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';

    ?>
</body>
</html>