<?php include 'entete.html';?>

<form action="traitement_submit_recette.php" method="POST" enctype="multipart/form-data">
    <p>
        <label> Nom du cocktail : </label>
        <input type="text" require name="titre" placeholder="Biere au beurre" size="30" pattern="^[^0-9]+$">
    </p>

    <p> 
        <label> Type de cocktail </label>
        <input type="radio" name="type" value="alcoolisé" id="type_alcoolisé" checked>
        <label for="type_alcoolisé">alcoolisé</label>
        <input type="radio" name="type" value="non_alcoolisé" id="type_non_alcoolisé">
        <label for="type_non_alcoolisé">non alcoolisé</label>
    </p> 

    <p> 
        <label> Composant principal </label>
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
        <input type="range" name="difficulte" min="1" max="5" step="1"> <!-- remplacer pour les etoiles ?? -->
    </p>

    <p>
        <label>Temps de préparation (mn) :</label>
        <input type="number" name="temps" required min="5" max="180" step="5">
    </p>    

    <p>
        <textarea name="recette" placeholder="Recette de mon cockatil pour X personnes .... Étapes: 1)…"></textarea>
    </p>

    <p>
        <label>Illustration (URL) :</label>
        <input type="text" name="photo" placeholder="http://blabla.com/image.jpg" size="40">
    </p>

    <p>
        <label>Date d'ajout :</label>
        <input name="date" type="date">
    </p>

    <p>
        <label>Adresse email de l'auteur :</label>
        <input type="email" name="adresse" required placeholder="Exemple@gmail.com">
    </p>
    
    <p>
        <input type="submit" value="Valider">
    </p>

<?php include 'bas_page.html'?>