<?php 

/* if isset(var){

}else{

}*/
include 'entete.html'; ?>

	<form action="traitement_submit.php" method="POST" enctype="multipart/form-data">

            
            <label><h5>Nom du cocktail :</h5></label><br/>
            <p>
                <input type="text" required name="titre" placeholder="Mojito" size="40" pattern="^[^0-9]+$">
                <!-- L'attribut "pattern" utilise une expression régulière (ou regexp) interdisant de saisir des chiffres -->
            </p>

            <label><h5>Alcool de base :</h5></label><br/>
			<p >
				<input type="radio"  id="base">
				<label for="base">Rhum</label>
				<input type="radio"  id="base">
				<label for="base">Vodka</label>
				<input type="radio"  id="base">
				<label for="base">Gin</label>
				<input type="radio" id="base">
				<label for="base">Sans Alcool</label>
			</p>


            <p>
                <label>Difficulté :</label>
                <input type="range" name="difficulte" value ="2.5" min="1" max="5" step="1">
            </p>
            <p>
                <label>Temps de préparation (mn) :</label>
                <input type="number" name="temps" required min="1" max="30" step="5">
            </p>
            <p>
                <textarea name="recette" placeholder="Veuillez saisir les instructions" width="60" height="70"></textarea>
            </p>
            <p>
                <label>Illustration (URL) :</label>
                <input type="text" name="photo" placeholder="http://blabla.com/image.jpg" size="40">
            </p>
            <p>
                <label>Illustration (fichier) :</label>
                <input type="file" name="photo_fichier" accept="image/jpeg">
            </p>
            <p>
                <label>Date d'ajout :</label>
                <input name="date" type="date">
            </p>
            <p>
                <label>Adresse email de l'auteur :</label>
                <input type="email" name="adresse" required placeholder="cocktail@cocktheque.fr">
            </p>
            <p>
                <input type="submit" value="Valider">
            </p>
    </form>

<?php include 'bas_page.html'; ?>
