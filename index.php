
<?php 
//home controller: appelle home.model 
include("./model/home.model.php");
//ensuite le titre de l'article
$layout_title= $header_title ;
// et puis affiche la vue de la page d'accueil avec les articles
include("./view/home.view.php"); 

