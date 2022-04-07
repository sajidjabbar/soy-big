<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/newsfeed.css">
<!-- Stylesheet -->

<!-- Banner_Sec Start Here -->
<section class="banner_sec">
    <div class="banner_slide">
        <div class="banner_image">
            <figure><img src="img/forum-banner.png" alt="" class="img-fluid"></figure>
        </div>
        <div class="container">
            <div class="banner_content">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="title wow animate__animated animate__fadeInDown">Our Forum Where You Can Find <br />
                            Discussion On Any Category</h2>
                        <p class="wow animate__animated animate__fadeInDown animate__delay-1s">Lorem ipsum dolor sit
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <div class="filter_form wow animate__animated animate__fadeInDown animate__delay-2s">
                            <div class="heading">
                                <h4>Search Any Topic</h4>
                            </div>
                            <form>
                                <div class="row align-items-center">
                                    <div class="col-md-7 p-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search Topic">
                                        </div>
                                    </div>
                                    <div class="col-md-3 p-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Sort By :">
                                        </div>
                                    </div>
                                    <div class="col-md-2 p-2">
                                        <div class="form-group">
                                            <button class="btn">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner_Sec End Here -->

<!-- Forum Sec Start Here -->
<section class="forum_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="write-post shadow_box">
                    <div class="head">
                        <h4>Tell Us About Your Story</h4>
                    </div>
                    <div class="write_box">
                        <div class="user_img">
                            <figure><img src="img/user.png" class="img-fluid"></figure>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Write Anything" class="form-control">
                            <button class="btn" type="submit">Post</button>
                        </div>
                    </div>
                </div>
                <div class="forum_posts">
                    <div class="post_box shadow_box">
                        <div class="dropdown_box">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> View
                                        Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                        Send Message</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                            aria-hidden="true"></i> Report Post</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        Hide Post For Mer</a>
                                </div>
                            </div>
                            <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                        </div>
                        <a href="single-newsfeed.php">
                            <div class="user-details">
                                <div class="img_box">
                                    <figure><img src="img/user1.png" class="img-fluid"></figure>
                                </div>
                                <div class="details">
                                    <h5 class="name">Terri Wilkes</h5>
                                    <p class="times_ago">Posted 3 Hours Ago</p>
                                </div>
                            </div>
                            <div class="post-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrion
                                </p>
                            </div>
                            <div class="about-post">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Luctus accumsan tortor posuere ac ut
                                    consequat semper. Elit ut aliquam purus sit amet luctus venenatis. Felis eget nunc
                                    lobortis mattis aliquam faucibus purus in. Tortor pretium viverra suspendisse
                                    potenti nullam ac tortor vitae.Egestas congue quisque egestas diam. Tincidunt
                                    praesent semper feugiat nibh sed. Sed turpis tincidunt id aliquet risus feugiat in
                                    ante metus. Consequat id porta nibh venenatis cras sed. Malesuada fames ac turpis
                                    egestas integer eget aliquet. Id porta nibh venenatis cras sed felis eget velit
                                    aliquet. Vitae suscipit tellus mauris a diam. Pretium aenean pharetra magna ac. Nunc
                                    sed id semper risus in hendrerit gravida. Nec feugiat nisl pretium fusce id. Amet
                                    mauris commodo quis imperdiet massa. Ac turpis egestas sed tempus urna. Orci
                                    phasellus egestas tellus rutrum tellus. Sed cras ornare arcu dui vivamus arcu felis
                                    bibendum.
                                </p>
                            </div>
                            <div class="feed-image">
                                <figure><img src="img/newsfeed.png" class="img-fluid"></figure>
                            </div>
                            <div class="bottom-group">
                                <div class="row align-items-end">
                                    <div class="col-md-6">
                                        <div class="post-actions">
                                            <div class="liked action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> Liked</p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                                            Dislike
                                                        </p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <button class="comment"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="porgerss_Dv">
                                            <div class="total-likes totals">
                                                <div class="images">
                                                    <figure><img src="img/like1.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like2.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like3.png" class="img-fluid"></figure>
                                                </div>
                                                <p>205+ Likes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-dislikes totals">
                                                <p>50+ Dislikes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-comments totals">
                                                <p>50+ Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post_box shadow_box">
                        <div class="dropdown_box">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> View
                                        Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                        Send Message</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                            aria-hidden="true"></i> Report Post</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        Hide Post For Mer</a>
                                </div>
                            </div>
                            <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                        </div>
                        <a href="single-newsfeed.php">
                            <div class="user-details">
                                <div class="img_box">
                                    <figure><img src="img/user1.png" class="img-fluid"></figure>
                                </div>
                                <div class="details">
                                    <h5 class="name">Terri Wilkes</h5>
                                    <p class="times_ago">Posted 3 Hours Ago</p>
                                </div>
                            </div>
                            <div class="post-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrion
                                </p>
                            </div>
                            <div class="about-post">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Luctus accumsan tortor posuere ac ut
                                    consequat semper. Elit ut aliquam purus sit amet luctus venenatis. Felis eget nunc
                                    lobortis mattis aliquam faucibus purus in. Tortor pretium viverra suspendisse
                                    potenti nullam ac tortor vitae.Egestas congue quisque egestas diam. Tincidunt
                                    praesent semper feugiat nibh sed. Sed turpis tincidunt id aliquet risus feugiat in
                                    ante metus. Consequat id porta nibh venenatis cras sed. Malesuada fames ac turpis
                                    egestas integer eget aliquet. Id porta nibh venenatis cras sed felis eget velit
                                    aliquet. Vitae suscipit tellus mauris a diam. Pretium aenean pharetra magna ac. Nunc
                                    sed id semper risus in hendrerit gravida. Nec feugiat nisl pretium fusce id. Amet
                                    mauris commodo quis imperdiet massa. Ac turpis egestas sed tempus urna. Orci
                                    phasellus egestas tellus rutrum tellus. Sed cras ornare arcu dui vivamus arcu felis
                                    bibendum.
                                </p>
                            </div>
                            <div class="feed-image">
                                <figure><img src="img/newsfeed2.png" class="img-fluid"></figure>
                            </div>
                            <div class="bottom-group">
                                <div class="row align-items-end">
                                    <div class="col-md-6">
                                        <div class="post-actions">
                                            <div class="liked action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> Liked</p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                                            Dislike
                                                        </p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <button class="comment"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="porgerss_Dv">
                                            <div class="total-likes totals">
                                                <div class="images">
                                                    <figure><img src="img/like1.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like2.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like3.png" class="img-fluid"></figure>
                                                </div>
                                                <p>205+ Likes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-dislikes totals">
                                                <p>50+ Dislikes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-comments totals">
                                                <p>50+ Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post_box shadow_box">
                        <div class="dropdown_box">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> View
                                        Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                        Send Message</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                            aria-hidden="true"></i> Report Post</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        Hide Post For Mer</a>
                                </div>
                            </div>
                            <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                        </div>
                        <a href="single-newsfeed.php">
                            <div class="user-details">
                                <div class="img_box">
                                    <figure><img src="img/user1.png" class="img-fluid"></figure>
                                </div>
                                <div class="details">
                                    <h5 class="name">Terri Wilkes</h5>
                                    <p class="times_ago">Posted 3 Hours Ago</p>
                                </div>
                            </div>
                            <div class="post-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrion
                                </p>
                            </div>
                            <div class="about-post">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Luctus accumsan tortor posuere ac ut
                                    consequat semper. Elit ut aliquam purus sit amet luctus venenatis. Felis eget nunc
                                    lobortis mattis aliquam faucibus purus in. Tortor pretium viverra suspendisse
                                    potenti nullam ac tortor vitae.Egestas congue quisque egestas diam. Tincidunt
                                    praesent semper feugiat nibh sed. Sed turpis tincidunt id aliquet risus feugiat in
                                    ante metus. Consequat id porta nibh venenatis cras sed. Malesuada fames ac turpis
                                    egestas integer eget aliquet. Id porta nibh venenatis cras sed felis eget velit
                                    aliquet. Vitae suscipit tellus mauris a diam. Pretium aenean pharetra magna ac. Nunc
                                    sed id semper risus in hendrerit gravida. Nec feugiat nisl pretium fusce id. Amet
                                    mauris commodo quis imperdiet massa. Ac turpis egestas sed tempus urna. Orci
                                    phasellus egestas tellus rutrum tellus. Sed cras ornare arcu dui vivamus arcu felis
                                    bibendum.
                                </p>
                            </div>
                            <div class="feed-image">
                                <figure><img src="img/newsfeed.png" class="img-fluid"></figure>
                            </div>
                            <div class="bottom-group">
                                <div class="row align-items-end">
                                    <div class="col-md-6">
                                        <div class="post-actions">
                                            <div class="liked action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> Liked</p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                                            Dislike
                                                        </p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <button class="comment"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="porgerss_Dv">
                                            <div class="total-likes totals">
                                                <div class="images">
                                                    <figure><img src="img/like1.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like2.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like3.png" class="img-fluid"></figure>
                                                </div>
                                                <p>205+ Likes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-dislikes totals">
                                                <p>50+ Dislikes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-comments totals">
                                                <p>50+ Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post_box shadow_box">
                        <div class="dropdown_box">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> View
                                        Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                        Send Message</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                            aria-hidden="true"></i> Report Post</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        Hide Post For Mer</a>
                                </div>
                            </div>
                            <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                        </div>
                        <a href="single-newsfeed.php">
                            <div class="user-details">
                                <div class="img_box">
                                    <figure><img src="img/user1.png" class="img-fluid"></figure>
                                </div>
                                <div class="details">
                                    <h5 class="name">Terri Wilkes</h5>
                                    <p class="times_ago">Posted 3 Hours Ago</p>
                                </div>
                            </div>
                            <div class="post-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrion
                                </p>
                            </div>
                            <div class="about-post">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Luctus accumsan tortor posuere ac ut
                                    consequat semper. Elit ut aliquam purus sit amet luctus venenatis. Felis eget nunc
                                    lobortis mattis aliquam faucibus purus in. Tortor pretium viverra suspendisse
                                    potenti nullam ac tortor vitae.Egestas congue quisque egestas diam. Tincidunt
                                    praesent semper feugiat nibh sed. Sed turpis tincidunt id aliquet risus feugiat in
                                    ante metus. Consequat id porta nibh venenatis cras sed. Malesuada fames ac turpis
                                    egestas integer eget aliquet. Id porta nibh venenatis cras sed felis eget velit
                                    aliquet. Vitae suscipit tellus mauris a diam. Pretium aenean pharetra magna ac. Nunc
                                    sed id semper risus in hendrerit gravida. Nec feugiat nisl pretium fusce id. Amet
                                    mauris commodo quis imperdiet massa. Ac turpis egestas sed tempus urna. Orci
                                    phasellus egestas tellus rutrum tellus. Sed cras ornare arcu dui vivamus arcu felis
                                    bibendum.
                                </p>
                            </div>
                            <div class="feed-image">
                                <figure><img src="img/newsfeed2.png" class="img-fluid"></figure>
                            </div>
                            <div class="bottom-group">
                                <div class="row align-items-end">
                                    <div class="col-md-6">
                                        <div class="post-actions">
                                            <div class="liked action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> Liked</p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <label class="action_container">
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark">
                                                        <p><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                                            Dislike
                                                        </p>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dislike action">
                                                <button class="comment"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="porgerss_Dv">
                                            <div class="total-likes totals">
                                                <div class="images">
                                                    <figure><img src="img/like1.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like2.png" class="img-fluid"></figure>
                                                    <figure><img src="img/like3.png" class="img-fluid"></figure>
                                                </div>
                                                <p>205+ Likes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-dislikes totals">
                                                <p>50+ Dislikes</p>
                                            </div>
                                            <span class="seprator">|</span>
                                            <div class="total-comments totals">
                                                <p>50+ Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="button-group text-center mt-5 mb-4">
                        <a href="#" class="btn">Load More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <?php include 'inc/sidebar.php';?>
            </div>
        </div>
    </div>
</section>
<!-- Forum Sec End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->