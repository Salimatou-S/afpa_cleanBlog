  <!-- Navigation-->

  <?php include("view/layout/nav.inc.php"); ?>

<!-- Page Header-->

<?php include("view/layout/header.inc.php"); ?>

<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p><?=$data["post_content"]  ?> <br> 
                <br> Redigé par <a href=""> <?=$data["display_name"]  ?></a> 
                 le  <?=$data["post_date"]  ?><br>
                Catégorie <?=$data["cat_descr"]  ?> </p>
            </div>
        </div>
    </div>
</article>
<!-- Footer-->

<?php include("view/layout/footer.inc.php"); ?>
