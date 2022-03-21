        <?php
        /* var_dump($_GET);
        exit;
        die($_GET['article']); 
        echo($_GET['article']); */
        include("./model/post1.model.php");

        $layout_title= $title ; //il s'agit du titre dans l'url au niveau du navigateur

        include("./view/post.view.php");
     
       
