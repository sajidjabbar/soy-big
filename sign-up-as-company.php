<?php include 'inc/app.php'; ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/sign-up-as-company.CSS">
<!-- css file ends here -->
<!-- sign up as a user section starts here -->
<section class="signup">
    <div class="container">
        <div class="row ">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="sign-up-box-wrapper">
                    <div class="sign-up-heading-wrapper ">
                        <h4>Sign Up As a Company</h4>
                        <h6>Et netus et malesuada fames. Dolor magna eget est lorem ipsum.</h6>
                        <div class="uploader">
                        <label for="abc">
                        <i class="fa fa-file-image-o" aria-hidden="true"></i>
                            <input type="file" hidden id="abc">
                        </label>
                        <h5 class="heading">Upload Logo</h5>
                        </div>
                    </div>

                    <div class="sign-up-form-wrapper">
                     <form action="editaccount2.php">
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
                                    <a href="editaccount2.php">
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
<?php include 'inc/footerlinks.php'; ?>