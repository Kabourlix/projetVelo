<form action="inscription.php" method = 'post' class = "inscrForm"> <!-- Ici on affichera un autre contenu une fois l'inscription validée -->
                <label for="prenom">Prénom </label>
                <input type="text" name = "prenom" id ="prenom" placeholder = "Pierre" required>

                <label for="nom">Nom </label>
                <input type="text" name = "nom" id = "nom" placeholder= "Rochard" required>

                <label for="pwd">Mot de passe</label>
                <input type="password" name='pwd' id='pwd' required minlength = '4'>

                <p>
                    Campus <br>
                <label for="b"> Brest   </label>
                <input type="radio" name="campus" value="brest" id = 'b'> <br>
                <label for="n">Nantes </label>
                <input type="radio" name="campus" value="nantes" id = 'n'> <br>
                <label for="r">Rennes </label>
                <input type="radio" name="campus" value="rennes" id = 'r'>
                </p>

                <input type="submit" value="Confirmer">
                
            </form>