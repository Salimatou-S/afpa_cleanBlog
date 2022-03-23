        <?php
        /* var_dump($_GET);
        exit;
        die($_GET['article']); 
        echo($_GET['article']); */

        //ce controller doit recevoir un parametre qui article
        if (!isset($_GET["article"])){
                die("Manque paramètre!");
        }
        include("./model/post.model.php");

        $layout_title= $title ; //il s'agit du titre dans l'url au niveau du navigateur

        include("./view/post.view.php");
     
       
