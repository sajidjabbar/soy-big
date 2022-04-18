<?php include 'inc/app.php'; ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/sign-up-as-company.CSS">
<!-- css file ends here -->
<!-- sign up as a user section starts here -->
<section class="signup my-5">
    <div class="container">
        <div class="row ">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="sign-up-box-wrapper">
                    <div class="sign-up-heading-wrapper ">
                        <h4>Sign Up As a Company</h4>
                        <h6>Et netus et malesuada fames. Dolor magna eget est lorem ipsum.</h6>
                    </div>

                    <div class="sign-up-form-wrapper">
                        <form action="sign-up.php">
                            <div class="form-group row">

                                <div class="col-lg-12">
                                    <input type="text" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="Password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="Password" class="form-control" placeholder="Confirm Password" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <a href="sign-in.php">
                                        <button class="form-control btn" type="submit"> Sign Up </button>
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
<?php include 'inc/footer.php'; ?>