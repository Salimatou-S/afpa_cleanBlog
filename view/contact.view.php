  <!-- Navigation-->

  <?php include("view/layout/nav.inc.php"); ?>

<!-- Page Header-->

<?php include("view/layout/header.inc.php"); ?>

<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                <div class="my-5">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" action="contact.add.php" method="post" >
                        <div class="form-floating">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." required  maxlength="25"/>
                            <label for="name">Nom</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Le nom est obligatoire.</div>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" id="email" name="email" type="email" placeholder="Entrez votre Email..." required />
                            <label for="email">Email</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Email obligatoire.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email invalide.</div>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" id="phone" name="phone" type="tel" placeholder="Enter your phone number..." required   pattern="0[6-7]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}"/>
                            <label for="phone">Phone Number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" name="message" id="message" placeholder="Enter your message here..." style="height: 12rem" required></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <br />
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        <!-- Submit Button-->
                        <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Footer est import?? de footer.inc.php-->

<?php include("view/layout/footer.inc.php"); ?>


<!--<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>-->

