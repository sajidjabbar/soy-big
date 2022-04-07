<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/forum.css">
<link rel="stylesheet" href="css/category.css">
<!-- Stylesheet -->

<!-- Banner_Sec Start Here -->
<section class="banner_sec">
    <div class="banner_slide">
        <div class="banner_image">
            <figure><img src="img/forum-banner.png" alt="" class="img-fluid"></figure>
        </div>
        <div class="container-fluid">
            <div class="banner_content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner">
                            <h2 class="font-weight-bold title wow animate__animated animate__fadeInDown">Best Companies In This Category</h2>
                        </div>
                    </div>
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
            <div class="col-lg-3">
                <?php include 'inc/category-sidebar.php';?>
            </div>
            <div class="col-lg-9">
                <div class="forum_posts">
                    <?php include 'inc/category-post.php';?>
                    <?php include 'inc/category-post.php';?>
                    <?php include 'inc/category-post.php';?>
                    <?php include 'inc/category-post.php';?>
                    <?php include 'inc/category-post.php';?>
                    <?php include 'inc/category-post.php';?>
                    <?php include 'inc/category-post.php';?>
                    <?php include 'inc/category-post.php';?>
                    <?php include 'inc/category-post.php';?>
                    <?php include 'inc/category-post.php';?>
                    <?php include 'inc/category-post.php';?>
                    <div class="button-group text-center mt-5 mb-4">
                        <a href="#" class="btn">Load More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Forum Sec End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->