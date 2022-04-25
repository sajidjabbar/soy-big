<?php include 'inc/app.php'; ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/email.css">
<!-- css file ends here -->
<!-- sign up as a user section starts here -->
<section class="signup">
    <div class="container">
        <div class="row ">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="sign-up-box-wrapper">
                    <div class="sign-up-heading-wrapper ">
                        <h4>Enter Your Email</h4>
                        <h6>Et netus et malesuada fames. Dolor magna eget est lorem ipsum.</h6>
                    </div>

                    <div class="sign-up-form-wrapper">
                        <form action="sign-up.php">
                            <div class="form-group row">

                                <div class="col-lg-12">
                                    <input type="text" class="form-control" placeholder="Email/Username" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <a href="sign-in.php">
                                        <button class="form-control btn" type="submit"> Continue</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
<!-- sign up as a user section ends here -->
<?php include 'inc/footerlinks.php'; ?>