
<?php 
//home controller: appelle home.model 
include("./model/contact_admin.model.php");
//ensuite le titre de l'article
$layout_title= "listes des contacts" ;
// et puis affiche la vue de la page d'accueil avec les articles
include("./view/contact_admin.view.php"); 

