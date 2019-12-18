<?php include 'entete.html'; ?>
	
	<script type="text/javascript" src="liste_dynamique.js"></script>
	<script type="text/javascript" src="suppression.js"></script>

<div class="core">
	<!--<form action="bdd.php" method="POST" enctype="multipart/form-data">-->
	<form id="form_recherche">
		<label><h3>Recherche de recettes</h3></label><br/>
		
		<input type="text" size="50" name="recherche" id="recherche_texte">
			
		
		<input type="submit" value="Rechercher" id="submit_research">	
	</form>

	<div class="row">
		
		<div id="js"></div>
		<div id="script"></div>
	
	</div>

</div>


<?php include 'bas_page.php'; ?>

