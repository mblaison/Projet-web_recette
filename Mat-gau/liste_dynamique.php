<?php include 'entete.html'; ?>
	
	<script type="text/javascript" src="liste_dynamique.js"></script>

	<div class="core">
	<!--<form action="bdd.php" method="POST" enctype="multipart/form-data">-->
	<form id="form_recherche">
	<p>
		<label><h3>Recherche de recettes</h3></label><br/>
		
		<input type="text" size="50" name="recherche" id="recherche_texte">
			
		<!--<div>
			
			<input type="submit" value="Recherche Avancée" id="advanced">  

			<h4>Recherche Avancée : </h4><br/>
	
			 Liste de checkbox permettant de filtrer les résultats par alcool de base utilisé 
			<label><h5>Alcool de base :</h5></label><br/>
			<div id = "base">
				<input type="checkbox"  id="rhum">
				<label for="rhum">Rhum</label>
				<input type="checkbox"  id="vodka">
				<label for="vodka">Vodka</label>
				<input type="checkbox"  id="gin">
				<label for="gin">Gin</label>
				<input type="checkbox" id="sans_alcool">
				<label for="sans_alcool">Sans Alcool</label>
			</div>
		
			<label><h5>Niveau de difficulté :</h5></label><br/>
			<div>
				<input type="range" name="a" id="difficulty" value="3" max="5" min="1" step="1">
			</div>

			<label><h5>Coût :</h5></label><br/>
			<div>
				<input type="range" name="a" id="difficulty" value="2" max="3" min="1" step="1">
			</div> 
			

		</p>
		</div> -->
		<input type="submit" value="Rechercher" id="submit_research">
		
	</form>

	<div id="js"></div>
	
	</div>


<?php include 'bas_page.php'; ?>

