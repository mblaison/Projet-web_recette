document.addEventListener("DOMContentLoaded", function () {

    var champ_mdp = document.querySelector("#pwd");
    var empl_erreur = document.querySelector("#emplacement_erreur");

    champ_mdp.addEventListener("keyup", function(event) {
        // console.log("vous avez appuyé sur une touche");
        var mdp = champ_mdp.value;
        // console.log("le mot de passe est", mdp);
        if (mdp.length < 10 || mdp.includes("bite") || mdp.includes("putain") || mdp.includes("hitler") || mdp.includes("devoir_supplementaire") || mdp.includes("salop") ) {
            empl_erreur.innerHTML = "Le mot de passe doit faire au moins 10 caractères et ne doit pas contenir de mot \"grossier\" style \"Hitler\" ou \"salope\" ";
        } else {
            empl_erreur.innerHTML = "";
        }
    });
});