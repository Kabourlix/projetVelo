<!DOCTYPE html>
<html lang="fr">

<?php
    function isAMember($nom, $prenom) /* Voir avec la gestion de la BDD. */
    {
        return false;
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="src/css/main.css">
    <title>BDD - Inscription</title>
</head>
<body>
    <header>

    </header>
    <nav>

    </nav>

    <p>
        Afin de profiter des services de location de vélo, merci de vous inscrire en remplissant le formulaire ci-dessous. 
        Cela nous permet de facilement confirmer le payement de la caution et de faciliter vos réservations.
    </p>
    <?php
        if (!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['campus']) || !isset($_POST['pwd']))
        {
            include('formulaire_inscription.php' );
        }elseif (htmlspecialchars($_POST['campus']) != 'brest'){
            echo '<p> Désolé, ce service n\'est pas disponible sur votre campus. Venez à Brest ;) </p>';
        }elseif( !isAMember(htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['prenom'])) ) {
                echo $_POST['campus']
            ?>
            <p>Votre inscription a été validé ! Cliquer sur le lien ci-dessous pour rejoindre la page d'acceuil.</p>
            <form action="membre.php">
                <input type="submit" value="Retourner à la page d'acceuil">
            </form>
            <?php
        }else{ /* Donc si c'est déjà un membre, sur Brest  */
            echo '<p> Vous êtes déjà inscrit. </p>'; /* Remettre le formulaire */
            include('formulaire_inscription.php');
        }
    ?>
    
</body>
</html>