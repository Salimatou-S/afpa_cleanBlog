<?php
include("config/config.inc.php");
//le modele prends en compte les parametres definis dans le fichier config.inc.php
include ("model/pdo.inc.php");
// la liaison est faite avec la base de données. Quand la liaison est possible, la requête est lancée.
try{
    $query="
    SELECT * 
    FROM blog_contacts";

    $req = $pdo ->query($query); //requete lancée à la base de données

    $data =$req->fetchAll(); // permet de recuperer toutes les datas

} catch(Exception $e){//Quand une erreur est constatée dans le try(exception), la fonction catch la recupère et le processus est arrêté par la fonction "die" qui va afficher le message d'erreur 
    die("ereur Mysql: " .$e->getMessage());
}

$bg='assets/img/home-bg.jpg'; //recupère l'image dansle dossier image
$header_title="Liste des contacts";
$header_subtitle="base de données!";
