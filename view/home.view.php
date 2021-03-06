        <!-- Page de navigation est deportée dans un fichier qu'on appelle nav.inc.php-->
        <?php include("view/layout/nav.inc.php"); ?>

        <!-- Page Header-->

        <?php include("view/layout/header.inc.php"); ?>
        <?php //var_dump($data); 
        //foreach($data as $onedata){
            //echo "data: "; 
         //   var_dump($onedata);
       // }
        ?>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                <?php foreach($data as $onedata){ ?> 
  <!-- on va faire une boucle pour recuperer pour chaque champs le titre -->
                <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.php?article=<?=$onedata['post_ID']; ?>">
                            <h2 class="post-title"><?=$onedata['post_title']; ?> </h2>
                        </a>
                        <img src="<?=$onedata["post_img_url"] ?>" alt="">
                        <h3 class="post-subtitle"><?=$onedata["post_content"];/*substr($onedata["post_content"],0,200) ;*/ ?> [...] </h3>
                       
                        <p class="post-meta"> 
                            Rédigé par
                            <a href="#!"><?=$onedata["display_name"] ?></a> le
                            <?=$onedata["post_date"]?>
                            <br>
                            classé dans <?=$onedata["cat_descr"] ?>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />

                    <?php } ?>
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
         <!-- Footer-->
         <!-- on inclut le footer qui se trouve dans le dossier layout de la view-->
        <?php include("view/layout/footer.inc.php"); ?>
        