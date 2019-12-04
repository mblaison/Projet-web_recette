<?php 

/* if isset(var){

}else{

}*/
include 'entete.html'; ?>
    
    <script type="text/javascript" src="add_cocktail.js"></script>
    <p>
        
    </p>
	<!--<form action="bdd.php" method="POST" enctype="multipart/form-data">-->
    <form id="formulaire">

            <label><h5>Nom du cocktail :</h5></label><br/>
            <p>
                <input type="text" required name="titre" placeholder="Mojito" size="40" pattern="^[^0-9]+$">
                <!-- L'attribut "pattern" utilise une expression régulière (ou regexp) interdisant de saisir des chiffres -->
            </p>

            <label><h5> Type de cocktail </h5></label><br/>
            <p> 
                <input type="radio" name="type" value="alcoolisé" id="type_alcoolisé" checked>
                <label for="type_alcoolisé">alcoolisé</label>
                <input type="radio" name="type" value="non_alcoolisé" id="type_non_alcoolisé">
                <label for="type_non_alcoolisé">non alcoolisé</label>
            </p> 

            <label><h5>Composant de base :</h5></label><br/>
			<p >
            <select name="Composant">
                    <option value="Vodka">Vodka</option>
                    <option value="Eau">Eau </option>
                    <option value="Jus de fruit">Jus de fruit</option>
                    <option value="vin/spiritueux">Vin ou de Spiritueux</option>
                    <option value="Rhum">Rhum</option>
                    <option value="Martini">Martini </option>
                    <option value="Tequila">Tequila</option>
                    <option value="Malibu">Malibu</option>
                    <option value="Curaso">Curaso</option>
                    <option value="Pastis">Pastis</option>
                    <option value="whisky">whisky </option>
                    <option value="Mezcal">Mezcal</option>
                    <option value="Soju">Soju</option>
                    <option value="Biere">Biere</option>
                    <option value="Champagne">Champagne</option>
                    <option value="Autre">Autre</option>       
            </select>
			</p>


            <p>
                <label>Difficulté :</label>
                <input type="range" name="difficulte" value ="3" min="1" max="5" step="1">
            </p>
            <p>
                <label>Temps de préparation (mn) :</label>
                <input type="number" name="temps" required min="1" max="30" step="1">
            </p>

            <p>
                Recette de mon cocktail pour <input type="number" name="temps" required min="1" max="100" step="1"> personnes <br/>    
            </p>
            <p>
                <label>Description:</label><br/>
                <textarea name="description" placeholder="Veuillez saisir une brève description du cocktail (2-3 lignes max)" rows="2" cols="70" ></textarea>
            </p>
            <p>
                <label>Instructions:</label><br/>
                <textarea name="recette" placeholder="Veuillez saisir les instructions" rows="20" cols="70"></textarea>
            </p>
            <p>
                <label>Illustration (URL) :</label>
                <input type="text" name="photo" placeholder="http://exemple_url_image/image.jpg" size="40">
            </p>

           <!-- <p>
                <label>Illustration (fichier) :</label>
                <input type="file" name="photo_fichier" accept="image/jpeg">
            </p> -->
            <p>
                <label>Date d'ajout :</label>
                <input name="date" type="date">
            </p>

            <p>
                <label>Adresse email de l'auteur :</label>
                <input type="email" name="adresse" required placeholder="cocktail@cocktheque.fr">
            </p>
             <input type="submit" value="Valider" id="envoi">

            </p>
    </form>

<?php include 'bas_page.html'; ?>
