<?php

include("config/config.inc.php");
include ("model/pdo.inc.php");

try{
    $query="
    SELECT post_date,LEFT(post_content," . TRONCATURE .") AS post_content, post_title, display_name,cat_descr 
    FROM blog_posts 

    INNER JOIN blog_users
    ON post_author = ID

    INNER JOIN blog_categories
    ON post_category = cat_id";
    //die($query);
    $req = $pdo ->query($query);
   /* while($data=$req ->fetch()){ */
    /* var_dump($req); */
    /* echo"fetch()"; */
    $data =$req->fetchAll();
    /* var_dump($data); */
    /* echo "<br>" . $data["post_title"] ."<br>"; */
 /*   } */
} catch(Exception $e){
    die("ereur Mysql: " .$e->getMessage());
}

$bg='assets/img/accueil2.webp';
$title="Mariages & Traditions Africaines";
$subtitle="Différences culturelles";

/* $title_art_1='Mariage Malinké';
$subtitle_art_1='Rites et coutumes';
$auther_art_1='Salimatou';
$date_art_1='Marc 18, 2022';

$title_art_2='Mariage Akan';
$subtitle_art_2='Rites et coutumes';
$auther_art_2='Lydia';
$date_art_2='Marc 18, 2022'; */
