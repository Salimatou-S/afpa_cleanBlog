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
        $bg=$data['post_img_url'];
        $layout_title= $data["post_title"]; //il s'agit du titre dans l'url au niveau du navigateur
        $header_title= substr($data["post_title"],0,TRONCATURE_HEADER) . '...';
        $header_subtitle= substr($data["post_title"],TRONCATURE_HEADER);

        include("./view/post.view.php");
     
       
