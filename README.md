# Projet-web_recette
## Bonne pratique git 
### git init : 
Initialise le .git dans le dossier local qui génère un index
de tous les fichiers dont il doit faire le suivi.
### git add . ou fichier :
 Ajoute tout (.) ou un fichier dans l’index de
suivi.
### git commit -m "Ton message" :
Enregistre les modifications et ajoute un petit message pratique pour savoir ce qui a été modifié.
### git commit –amend : 
Permet de modifier le dernier message du dernier commit, typiquement si tu fais une faute de frappe.
### git log : 
Permet de voir tous les commit fait, pratique pour récupérer une ancienne version ou pour consulter la modification en question que tu pourrais vouloir chercher.
### git reset HEAD :
 Annule le dernier commmit (à la place de head tu peux rajouter le numéro du commit que tu récupères avec le log)
### git push origin master : 
Envoie tous les commit sur le cloud en créant un historique de commit. Il est important de faire cette commande après chaque session de travail, afin de mettre à jour ton cloud.
### git pull : 
Permet de récupérer des commit issus de ton cloud. Typiquement, travailler en groupe implique de pouvoir voir et récupérer ce qu’ont fait les autres contributeurs. Effectuer cette commande permet de te mettre à jour, il faut donc la faire **AVANT CHAQUE SESSION de travail ! ! !**

## Site utile 
### openclassroom bootstrap 
https://openclassrooms.com/fr/courses/1885491-prenez-en-main-bootstrap/1885777-mise-en-route
### tester un template 
https://www.bootply.com/

### lancer du php 
php -S localhost:8000
