        <!-- Page de navigation est deportée dans un fichier qu'on appelle nav.inc.php-->
        <?php include("view/layout/nav.inc.php"); ?>

        <!-- Page Header-->

        <?php include("view/layout/header.inc.php"); ?>

        <!-- Main Content-->

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
  <?php foreach($data as $onedata){ ?> 
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <?=$onedata['contact_name']; ?>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
     <p> <?=$onedata['contact_email']; ?></p>
     <p> <?=$onedata['contact_phone']; ?></p>
     <p><?=$onedata['contact_message']; ?></p>
      </div>
    </div>
  </div>
  <?php } ?>
         <!-- Footer-->
         <!-- on inclut le footer qui se trouve dans le dossier layout de la view-->
        <?php include("view/layout/footer.inc.php"); ?>
        