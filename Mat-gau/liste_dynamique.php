<?php include 'entete.html'; ?>

<body>
<link rel="stylesheet" type="text/css" href="dyna.css">

	<form>
		<label><h3>Recherche de recettes</h3></label>
		
		<input type="text" size="50" name="Recherche Recette" id="research_text">
			
		<div>
			
			<!--<input type="submit" value="Recherche Avancée" id="advanced">  -->

			<h4>Recherche Avancée : </h4><br/>
			<input type="checkbox" name="">
			<label for="Crevettes">Crevettes</label>
			<input type="checkbox" name="Arachide">
			<label for="Arachide">Arachide</label><br/>
			<div>
				<input type="range" name="a" id="difficulty" value="5" max="10" min="1" step="1">
				<label for="difficulty">Difficulté</label>
			</div>
			
		</p>
		</div>
		<input type="submit" value="Rechercher" id="submit_research">

	</form>

</body>

<?php include 'bas_page.html'; ?>

