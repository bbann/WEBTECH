<?php
session_start();

// if (!isset($_SESSION['firstname'])) {
//     $_SESSION['msg'] = "You must log in first";
//     header('location: login.php');
// }
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['firstname']);
    header("location: login.php");
}
?>

<div class="content">
    <!--notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <!-- logged in user information
    <?php if (isset($_SESSION['firstname'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['firstname']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?> -->
</div>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DormitoryItemManager</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style-portfolio.css">
    <link rel="stylesheet" href="css/picto-foundry-food.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="favicon-1.ico" type="image/x-icon">

</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Dormitory</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse container-fluid" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav main-nav  clear navbar-right ">
                        <li><a class="navactive color_animation" href="#top" style="padding-right: 5px;">WELCOME</a></li>
                        <li><a class="color_animation" href="#story" style="padding-right: 5px;">ABOUT</a></li>
                        <li><a class="color_animation" href="#featured" style="padding-right: 5px;">FEATURED </a></li>
                        <li><a class="color_animation" href="signup.php" style="padding-right: 5px;">SIGN UP </a></li>
                    </ul>
                </div>
            </div>
    </nav>

    <div id="top" class="starter_container bg">
        <div class="follow_container">
            <div class="col-md-6 col-md-offset-3">
                <h2 class="top-title">Louisville</h2>
                <h2 class="white second-title">" Your number ONE DormItemManager "</h2>
                <hr>
            </div>
        </div>
    </div>

    <!-- ============ About Us ============= -->

    <section id="story" class="description_content">
        <div class="text-content container">
            <div class="col-md-6">
                <h1>About us</h1> <br>
                <p class="desc-text"> Louisville is a new system focused on making items records keeping more easier, convenient and safer for all dormitories in the Saint Louis Senior High School.</p>
            </div>
            <div class="col-md-6">
                <div class="image-section">
                    <img src="img/login1.jpg" width="250" height="220">

                </div>
            </div>
        </div>
    </section>

    <!-- ============ Featured Dormitories  ============= -->

    <section id="featured" class="description_content">
        <div class="featured background_content">
            <h1>Our Featured Dormitories <span>Gallery</span></h1>
        </div>
        <div class="text-content container">
            <div class="col-md-6">
                <h1>Have a look at some of our dormitories!</h1>
                <div class="icon-hotdog fa-2x"></div>
                <p class="desc-text">Each dormitory has a unique name; named after saints, with attractive rooms all to suit one's taste and needs. Check them out!</p>
            </div>
            <div class="col-md-6">
                <ul class="image_box_story2">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/st2.jpeg" alt="...">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/st3.jpeg" alt="...">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/st4.jpg" alt="...">
                                <div class="carousel-caption">
                                </div>
                                <div class="item">
                                    <img src="img/st6.jpeg" alt="...">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </section>


    <!-- ============ Footer Section  ============= -->

    <footer class="sub_footer">
        <div class="container">
            <div class="col-md-4">
                <p class="sub-footer-text text-center">Back to <a href="#top">TOP</a></p>
            </div>
        </div>
    </footer>


    <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>