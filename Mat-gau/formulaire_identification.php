<?php include 'entete.html';?>

<p></p>
        <form method="post" action="connexion.php">
            <p>
                <label for="email">Adresse email : </label>
                <br>
                <input name="adresse_email" type="email" id="email" required>
            </p>
            <p>
                <label for="pwd">Mot de passe : </label>
                <br>
                <input name="mot_de_passe" type="password" id="pwd" required>
            </p>
            <input type="submit" value="cliquer ici pour se connecter">
        </form>
        
<?php include 'bas_page.html'?>