<?php include 'entete.html';?>
<script type="text/javascript" src="formulaire_inscription.js"></script>



<form method="post" action="inscription.php">
<div style="text-align: center">
<h1>Inscris toi sur le site pour pouvoir poster tes meilleurs cocktails </h1>
</div>
<div style="text-align: center">
    <p>
        <label for="email"> Votre Adresse Email : </label>
        <input name="adresse_email" type="email" id="email" required placeholder="votre@mail.com">
    </p>
</div>

<div style="text-align: center">
    <p>
    <label for="pwd">Mot de passe : </label>
    <input name="mot_de_passe" type="password" id="pwd" required placeholder="pas123456stp"> 
    </p>
</div>

<div style="text-align: center">
    <p>
    <input type="submit" value="cliquer ici pour s'inscrire">
    <p id="emplacement_erreur"></p>
    </p>
</div>
</form>
</div>

<?php include 'bas_page.html'?>