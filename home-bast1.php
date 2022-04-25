<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/home-best1.css">
<link rel="stylesheet" href="css/category-detail.css">
<!-- Stylesheet -->

<!-- Profile Sec Start Here -->
<section class="profile_sec ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 px-0">
                <div class="profile-details">
                    <div class="profile-img">
                        <figure><img src="img/Group 48012.png" class="img-flid"></figure>
                    </div>
                    <div class="profile-name">
                        <h3>Mason Law</h3>
                    </div>
                    <div class="profile-info">
                        <p class="member flexDv"><span class="property">Member Since:</span> <span class="value">5
                                August 2022</span></p>
                        <p class="member flexDv"><span class="property">Total Posts:</span> <span
                                class="value">25</span></p>
                    </div>
                    <div class="profile-about">
                        <h4 class="title">About</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tempor incididunt ut
                            labore et dolore magna aliqua. Luctus acc tortor posuere ac ut consequat.
                        </p>
                    </div>
                    <a href="editprofile.php" class="btn"> Hire Now</a>
                    <a href="editprofile.php" class="btn1"> Message</a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="tabs-list-wrapper">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Newsfeed</a>
                        </li>
                    </ul>
                </div>
                <div class="tabs-content-wrapper">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="forum_posts">
                                <div class="post_box shadow_box">
                                    <div class="dropdown_box">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-user"
                                                        aria-hidden="true"></i> View
                                                    Profile</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Send Message</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                                        aria-hidden="true"></i> Report Post</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-eye-slash"
                                                        aria-hidden="true"></i>
                                                    Hide Post For Mer</a>
                                            </div>
                                        </div>
                                        <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                                    </div>
                                    <a href="single-post.php">
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
                                                Venenatis Urna Cursus Eget Nunc Scelerisque Viverra Mauris Lorem Ipsum
                                                Dolor Sit
                                                Amet,
                                                Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore
                                                Et Dolore
                                                Magna
                                                Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco
                                                Laboris ?
                                            </p>
                                        </div>
                                        <div class="bottom-group">
                                            <div class="row align-items-end">
                                                <div class="col-md-6">
                                                    <div class="post-actions">
                                                        <div class="liked action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-up"
                                                                            aria-hidden="true"></i> Liked</p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-o-down"
                                                                            aria-hidden="true"></i>
                                                                        Dislike
                                                                    </p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <button class="comment"><img src="img/comment.png" alt="">

                                                                Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="porgerss_Dv">
                                                        <div class="total-likes totals">
                                                            <div class="images">
                                                                <figure><img src="img/like1.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like2.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like3.png" class="img-fluid">
                                                                </figure>
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
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-user"
                                                        aria-hidden="true"></i> View
                                                    Profile</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Send Message</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                                        aria-hidden="true"></i> Report Post</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-eye-slash"
                                                        aria-hidden="true"></i>
                                                    Hide Post For Mer</a>
                                            </div>
                                        </div>
                                        <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                                    </div>
                                    <a href="single-post.php">
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
                                                Venenatis Urna Cursus Eget Nunc Scelerisque Viverra Mauris Lorem Ipsum
                                                Dolor Sit
                                                Amet,
                                                Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore
                                                Et Dolore
                                                Magna
                                                Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco
                                                Laboris ?
                                            </p>
                                        </div>
                                        <div class="bottom-group">
                                            <div class="row align-items-end">
                                                <div class="col-md-6">
                                                    <div class="post-actions">
                                                        <div class="liked action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-up"
                                                                            aria-hidden="true"></i> Liked</p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-o-down"
                                                                            aria-hidden="true"></i>
                                                                        Dislike
                                                                    </p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <button class="comment"><img src="img/comment.png" alt="">

                                                                Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="porgerss_Dv">
                                                        <div class="total-likes totals">
                                                            <div class="images">
                                                                <figure><img src="img/like1.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like2.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like3.png" class="img-fluid">
                                                                </figure>
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
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-user"
                                                        aria-hidden="true"></i> View
                                                    Profile</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Send Message</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                                        aria-hidden="true"></i> Report Post</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-eye-slash"
                                                        aria-hidden="true"></i>
                                                    Hide Post For Mer</a>
                                            </div>
                                        </div>
                                        <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                                    </div>
                                    <a href="single-post.php">
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
                                                Venenatis Urna Cursus Eget Nunc Scelerisque Viverra Mauris Lorem Ipsum
                                                Dolor Sit
                                                Amet,
                                                Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore
                                                Et Dolore
                                                Magna
                                                Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco
                                                Laboris ?
                                            </p>
                                        </div>
                                        <div class="bottom-group">
                                            <div class="row align-items-end">
                                                <div class="col-md-6">
                                                    <div class="post-actions">
                                                        <div class="liked action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-up"
                                                                            aria-hidden="true"></i> Liked</p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-o-down"
                                                                            aria-hidden="true"></i>
                                                                        Dislike
                                                                    </p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <button class="comment"><img src="img/comment.png" alt="">

                                                                Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="porgerss_Dv">
                                                        <div class="total-likes totals">
                                                            <div class="images">
                                                                <figure><img src="img/like1.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like2.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like3.png" class="img-fluid">
                                                                </figure>
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
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-user"
                                                        aria-hidden="true"></i> View
                                                    Profile</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Send Message</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                                        aria-hidden="true"></i> Report Post</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-eye-slash"
                                                        aria-hidden="true"></i>
                                                    Hide Post For Mer</a>
                                            </div>
                                        </div>
                                        <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                                    </div>
                                    <a href="single-post.php">
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
                                                Venenatis Urna Cursus Eget Nunc Scelerisque Viverra Mauris Lorem Ipsum
                                                Dolor Sit
                                                Amet,
                                                Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore
                                                Et Dolore
                                                Magna
                                                Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco
                                                Laboris ?
                                            </p>
                                        </div>
                                        <div class="bottom-group">
                                            <div class="row align-items-end">
                                                <div class="col-md-6">
                                                    <div class="post-actions">
                                                        <div class="liked action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-up"
                                                                            aria-hidden="true"></i> Liked</p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-o-down"
                                                                            aria-hidden="true"></i>
                                                                        Dislike
                                                                    </p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <button class="comment"><img src="img/comment.png" alt="">

                                                                Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="porgerss_Dv">
                                                        <div class="total-likes totals">
                                                            <div class="images">
                                                                <figure><img src="img/like1.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like2.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like3.png" class="img-fluid">
                                                                </figure>
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
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-user"
                                                        aria-hidden="true"></i> View
                                                    Profile</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Send Message</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                                        aria-hidden="true"></i> Report Post</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-eye-slash"
                                                        aria-hidden="true"></i>
                                                    Hide Post For Mer</a>
                                            </div>
                                        </div>
                                        <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                                    </div>
                                    <a href="single-post.php">
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
                                                Venenatis Urna Cursus Eget Nunc Scelerisque Viverra Mauris Lorem Ipsum
                                                Dolor Sit
                                                Amet,
                                                Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore
                                                Et Dolore
                                                Magna
                                                Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco
                                                Laboris ?
                                            </p>
                                        </div>
                                        <div class="bottom-group">
                                            <div class="row align-items-end">
                                                <div class="col-md-6">
                                                    <div class="post-actions">
                                                        <div class="liked action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-up"
                                                                            aria-hidden="true"></i> Liked</p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-o-down"
                                                                            aria-hidden="true"></i>
                                                                        Dislike
                                                                    </p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <button class="comment"><img src="img/comment.png" alt="">

                                                                Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="porgerss_Dv">
                                                        <div class="total-likes totals">
                                                            <div class="images">
                                                                <figure><img src="img/like1.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like2.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like3.png" class="img-fluid">
                                                                </figure>
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
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-user"
                                                        aria-hidden="true"></i> View
                                                    Profile</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Send Message</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                                        aria-hidden="true"></i> Report Post</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-eye-slash"
                                                        aria-hidden="true"></i>
                                                    Hide Post For Mer</a>
                                            </div>
                                        </div>
                                        <!-- <a href="#" class="edit-post"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
                                    </div>
                                    <a href="single-post.php">
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
                                                Venenatis Urna Cursus Eget Nunc Scelerisque Viverra Mauris Lorem Ipsum
                                                Dolor Sit
                                                Amet,
                                                Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore
                                                Et Dolore
                                                Magna
                                                Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco
                                                Laboris ?
                                            </p>
                                        </div>
                                        <div class="bottom-group">
                                            <div class="row align-items-end">
                                                <div class="col-md-6">
                                                    <div class="post-actions">
                                                        <div class="liked action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-up"
                                                                            aria-hidden="true"></i> Liked</p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-o-down"
                                                                            aria-hidden="true"></i>
                                                                        Dislike
                                                                    </p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <button class="comment"><img src="img/comment.png" alt="">

                                                                Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="porgerss_Dv">
                                                        <div class="total-likes totals">
                                                            <div class="images">
                                                                <figure><img src="img/like1.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like2.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like3.png" class="img-fluid">
                                                                </figure>
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
                        <!-- newfeed-start -->
                        <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="forum_posts">
                                <div class="post_box shadow_box">
                                    <div class="dropdown_box">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-user"
                                                        aria-hidden="true"></i> View
                                                    Profile</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Send Message</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                                        aria-hidden="true"></i> Report Post</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-eye-slash"
                                                        aria-hidden="true"></i>
                                                    Hide Post For Mer</a>
                                            </div>
                                        </div>
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
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor
                                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrion
                                            </p>
                                        </div>
                                        <div class="about-post">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor
                                                incididunt ut labore et dolore magna aliqua. Luctus accumsan tortor
                                                posuere ac ut
                                                consequat semper. Elit ut aliquam purus sit amet luctus venenatis. Felis
                                                eget nunc
                                                lobortis mattis aliquam faucibus purus in. Tortor pretium viverra
                                                suspendisse
                                                potenti nullam ac tortor vitae.Egestas congue quisque egestas diam.
                                                Tincidunt
                                                praesent semper feugiat nibh sed. Sed turpis tincidunt id aliquet risus
                                                feugiat in
                                                ante metus. Consequat id porta nibh venenatis cras sed. Malesuada fames
                                                ac turpis
                                                egestas integer eget aliquet. Id porta nibh venenatis cras sed felis
                                                eget velit
                                                aliquet. Vitae suscipit tellus mauris a diam. Pretium aenean pharetra
                                                magna ac. Nunc
                                                sed id semper risus in hendrerit gravida. Nec feugiat nisl pretium fusce
                                                id. Amet
                                                mauris commodo quis imperdiet massa. Ac turpis egestas sed tempus urna.
                                                Orci
                                                phasellus egestas tellus rutrum tellus. Sed cras ornare arcu dui vivamus
                                                arcu felis
                                                bibendum.
                                            </p>
                                        </div>
                                        <div class="feed-image">
                                            <figure><img src="img/newsfeed.png" class="img-fluid"></figure>
                                        </div>
                                        <div class="bottom-group mt-4">
                                            <div class="row align-items-end">
                                                <div class="col-md-6">
                                                    <div class="post-actions">
                                                        <div class="liked action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-up"
                                                                            aria-hidden="true"></i> Liked</p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-o-down"
                                                                            aria-hidden="true"></i>
                                                                        Dislike
                                                                    </p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <button class="comment"><img src="img/comment.png" alt="">

                                                                Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="porgerss_Dv">
                                                        <div class="total-likes totals">
                                                            <div class="images">
                                                                <figure><img src="img/like1.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like2.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like3.png" class="img-fluid">
                                                                </figure>
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
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-user"
                                                        aria-hidden="true"></i> View
                                                    Profile</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-comment-o"
                                                        aria-hidden="true"></i>
                                                    Send Message</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-exclamation-triangle"
                                                        aria-hidden="true"></i> Report Post</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-eye-slash"
                                                        aria-hidden="true"></i>
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
                                                <h5 class="name">Selina Kyle</h5>
                                                <p class="times_ago">Posted 3 Hours Ago</p>
                                            </div>
                                        </div>
                                        <div class="post-text">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor
                                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrion
                                            </p>
                                        </div>
                                        <div class="about-post">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor
                                                incididunt ut labore et dolore magna aliqua. Luctus accumsan tortor
                                                posuere ac ut
                                                consequat semper. Elit ut aliquam purus sit amet luctus venenatis. Felis
                                                eget nunc
                                                lobortis mattis aliquam faucibus purus in. Tortor pretium viverra
                                                suspendisse
                                                potenti nullam ac tortor vitae.Egestas congue quisque egestas diam.
                                                Tincidunt
                                                praesent semper feugiat nibh sed. Sed turpis tincidunt id aliquet risus
                                                feugiat in
                                                ante metus. Consequat id porta nibh venenatis cras sed. Malesuada fames
                                                ac turpis
                                                egestas integer eget aliquet. Id porta nibh venenatis cras sed felis
                                                eget velit
                                                aliquet. Vitae suscipit tellus mauris a diam. Pretium aenean pharetra
                                                magna ac. Nunc
                                                sed id semper risus in hendrerit gravida. Nec feugiat nisl pretium fusce
                                                id. Amet
                                                mauris commodo quis imperdiet massa. Ac turpis egestas sed tempus urna.
                                                Orci
                                                phasellus egestas tellus rutrum tellus. Sed cras ornare arcu dui vivamus
                                                arcu felis
                                                bibendum.
                                            </p>
                                        </div>
                                        <div class="feed-image">
                                            <figure><img src="img/newsfeed2.png" class="img-fluid"></figure>
                                        </div>
                                        <div class="bottom-group mt-4">
                                            <div class="row align-items-end">
                                                <div class="col-md-6">
                                                    <div class="post-actions">
                                                        <div class="liked action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-up"
                                                                            aria-hidden="true"></i> Liked</p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <label class="action_container">
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark">
                                                                    <p><i class="fa fa-thumbs-o-down"
                                                                            aria-hidden="true"></i>
                                                                        Dislike
                                                                    </p>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="dislike action">
                                                            <button class="comment"><img src="img/comment.png" alt="">

                                                                Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="porgerss_Dv">
                                                        <div class="total-likes totals">
                                                            <div class="images">
                                                                <figure><img src="img/like1.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like2.png" class="img-fluid">
                                                                </figure>
                                                                <figure><img src="img/like3.png" class="img-fluid">
                                                                </figure>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Profile Sec End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->