<?php
include("config/config.inc.php");
//le modele prends en compte les parametres definis dans le fichier config.inc.php
include ("model/pdo.inc.php");
// la liaison est faite avec la base de données. Quand la liaison est possible, la requête est lancée.
try{
    $query="
    SELECT post_ID, post_date,LEFT(post_content," . TRONCATURE .") AS post_content, post_title, display_name,cat_descr,post_img_url 
    FROM blog_posts 

    INNER JOIN blog_users
    ON post_author = ID

    INNER JOIN blog_categories
    ON post_category = cat_id
    
    ORDER BY post_date DESC ";

    /* try permet de recuperer les données dans la base dans une variable query. On selectionne les id des articles, leur date  de parution, les titres le nom des auteurs, la catégories et url des images ainsi que leur contenu en faisant appel aux tables blog_users et categories par ordre chronologique (du plus recent au plus ancien )
    Left(post_content, " .TRONCATURE .") as post_content: nous permet de ne pas afficher tout le texte du contenu en le tronquant à gauche: on recuprère dans ce cas les n premiers caractères du contenu , le n est defini dans config.inc, qui est de 200 */


    //die($query);
    $req = $pdo ->query($query); //requete lancée à la base de données

   /* while($data=$req ->fetch()){ */
    /* var_dump($req); */
    /* echo"fetch()"; */

    $data =$req->fetchAll(); // permet de recuperer toutes les datas

    /* var_dump($data); */
    /* echo "<br>" . $data["post_title"] ."<br>"; */
 /*   } */

} catch(Exception $e){//Quand une erreur est constatée dans le try(exception), la fonction catch la recupère et le processus est arrêté par la fonction "die" qui va afficher le message d'erreur 
    die("ereur Mysql: " .$e->getMessage());
}

$bg='assets/img/home-bg.jpg'; //recupère l'image dansle dossier image
$header_title="Blog de surf";
$header_subtitle="meilleur sport de glisse!";

/* $title_art_1='Mariage Malinké';
$subtitle_art_1='Rites et coutumes';
$auther_art_1='Salimatou';
$date_art_1='Marc 18, 2022';

$title_art_2='Mariage Akan';
$subtitle_art_2='Rites et coutumes';
$auther_art_2='Lydia';
$date_art_2='Marc 18, 2022'; */
