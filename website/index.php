<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDD - Prêt de vélo</title>
</head>
<body>
    <header>
        Réservation de vélo - Inscription
    </header>

    <nav>
        <!-- Rien pour l'instant, il me faudrait le code du site géré par les nantais -->
    </nav>

    <p style = "text-align=center;">
    Bienvenue sur la section réservation de vélo du BDD, campus de Brest. 
    </p>
    <div class="sendButton">
        <form action="inscription.php" methode = 'post'>
        <input type="submit" value = "S'inscrire" name="inscr">
        </form>
        <form action="membre.php" method = 'post'>
            <input type="submit" value = "Se connecter" name = "login">
        </form>
    </div>

</body>
</html>