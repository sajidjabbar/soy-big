<?php include 'inc/app.php'; ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/signinyouraccount.css">
<!-- css file ends here -->
<!-- sign up as a user section starts here -->
<section class="signup">
    <div class="container">
        <div class="row ">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="sign-up-box-wrapper">
                    <div class="sign-up-heading-wrapper ">
                        <h4>Sign In To Your Account</h4>
                        <h6>Et netus et malesuada fames. Dolor magna eget est lorem ipsum.</h6>
                    </div>

                    <div class="sign-up-form-wrapper">
                        <form action="sign-up.php">
                            <div class="form-group row">

                                <div class="col-lg-12">
                                    <input type="text" class="form-control" placeholder="Email/Username" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="col-lg-12">
                                    <div class="forget">
                                        <div class="col-md-6 p-0 text-left">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                            <span class="text">Remember Me</span>
                                        </div>
                                        <div class="col-md-6 p-0 text-right">
                                            <span>Forgot Password</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <a href="sign-in.php">
                                        <button class="form-control btn" type="submit">Sign In</button>

                                </div>
                            </div>
                            <div class="sign-up-heading-wrapper">
                                <h4>OR</h4>
                                <span></span>
                                <span class="border"></span>
                                
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <a href="sign-in.php">
                                        <button class="form-control btn" type="submit">Join As A Lawfirm</button>

                                </div>
                            </div>

                        </form>

                    </div>
                    <div class="company row">
                        <div class="col-lg-12 company">
                            <a href="sign-in.php">
                                <button type="submit">Join As A Company</button>
                        </div>
                    </div>
                    <div class="join row">
                        <div class="col-lg-12 join">
                            <a href="sign-in.php">
                                <button type="submit">Join As A Normal User</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
<!-- sign up as a user section ends here -->
<?php include 'inc/footerlinks.php'; ?>