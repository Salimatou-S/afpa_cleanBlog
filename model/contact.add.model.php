<?php
// on fait les include quand les données existent, quand les tests sont valides
include("config/config.inc.php");
include ("model/pdo.inc.php");

//VERSION REQUETE NON PREPAREE
/* try{
//var_dump($_POST); 
/* $query= "
    INSERT INTO blog_contacts
    (contact_name, contact_email, contact_phone, contact_message)
    VALUES
    ('" . addslashes($_POST["name"]) ."', '" . $_POST["email"] ."', '" .$_POST["phone"] ."', '" . addslashes($_POST["message"] )."')";
 */    //die($query);
   /*  $req=$pdo->exec($query);
    //echo"Fin";
    

}catch (Exception $e){
    //die("erreur Mysql: " .$e->getMessage());
    header("Location:index.php?erreur=1");
    exit;
} */

//VERSION REQUETE PREPAREE 
try{

 $query= "
    INSERT INTO blog_contacts
    (contact_name, contact_email, contact_phone, contact_message)
    VALUES
    (:contact_name,:contact_email,:contact_phone, :contact_message) ";
    //die($query);
$curseur=$pdo->prepare($query);
$curseur->bindValue(':contact_name',$_POST["name"], PDO::PARAM_STR);
$curseur->bindValue(':contact_email',$_POST["email"], PDO::PARAM_STR);
$curseur->bindValue(':contact_phone',$_POST["phone"], PDO::PARAM_STR);
$curseur->bindValue(':contact_message',$_POST["message"], PDO::PARAM_STR);

$curseur->execute();
    //echo"Fin";
    

}catch (Exception $e){
    //die("erreur Mysql: " .
    header("Location:index.php?erreur=1");
    exit;
}