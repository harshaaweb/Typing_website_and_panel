<?php
include('./dbconfig.php');
$select = "select * from users";
$query = mysqli_query($conn, $select);
$data = mysqli_fetch_assoc($query);

session_start();
if (isset($_SESSION['newEmail'])) {
    $S_Email = $_SESSION['newEmail'];
    //  alert  $_SESSION['newEmail'];
    // alert S_email
    // echo "<script>alert('$S_Email');</script>";
} else {
    // header("location:./login.php");
    // echo "<script>alert('session not set');</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Typing School</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="./assets/css/carousel.css">
    <!-- bs css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <!--header-->
    <header class="main-header clearfix" role="header">


        <div class="logo" style="font-size: 23px;">
            <a href="#" style="font-size: 23px;  font-family: serif; text-transform: lowercase; "><em>Jyoti</em>
                <pm style="color:#f5a425">Institute</pm>
            </a>
        </div>
        <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
                <!-- <li><a href="#section4">Home</a></li> -->
                <li class="has-submenu"><a href="#section2">Type</a>
                    <ul class="sub-menu">
                        <li><a href="./maintest.php">Real Test</a></li>
                        <li>
                            <a href="./typing.php">Single Word</a>
                        </li>
                        <li><a href="./paratype.php">Single Line</a></li>
                        <li><a href="./lengthypara.php">Paragraph</a></li>
                </li>

            </ul>
            </li>
            <li><a href="./subscribe.php">Subscribe</a></li>

            <li><a href="./userprofile.php"><i class="fa-solid fa-user"></i></a></li>
            <!-- <li><a href="#section5">Video</a></li> -->
            <!-- <li>
                <div class="input-group">
                    <div id="search-autocomplete" class="form-outline">
                        <input type="search" id="form1" placeholder="Typing Institute..." style="background: white;
    border: none;
    border-radius: 0px;
    color: black;
    font-weight: 600;
    width:180px;
   " class="form-control" />
                        <label class="form-label" for="form1"></label>
                    </div>
                    <button type="button" class="btn btn-primary" style="height: 38px;
    background: #efa423;
    border: none;
    color: black;
    font-weight: 600;
    border-radius: 0px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
            </li> -->

            </ul>
        </nav>
    </header>

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video2.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Online School of typing</h6>
                <h2><em>Start</em> Typing</h2>
                <div class="main-button">
                    <a href="./typing.php">
                        <div class="scroll-to-section">Get
                            Started

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->


    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="features-post">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-pencil"></i>Single Word Typing</h4>
                            </div>
                            <div class="content-hide">
                                <p>Single line typing is best for remebering the place of every single character at
                                    keyboard. By
                                    this you will easily learn location of different key's in very short run</p>
                                <p class="hidden-sm">Single line typing is best for remebering the place of every single
                                    character at
                                    keyboard. By
                                    this you will easily learn location of different key's in very short run.</p>
                                <a href="./typing.php">
                                    <div class="scroll-to-section">Start</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="features-post second-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-graduation-cap"></i>Single Line Typing</h4>
                            </div>
                            <div class="content-hide">
                                <p>Single line typing is best for good foundation of typing . By this you will get
                                    ideas about the location of key's</p>
                                <p class="hidden-sm">Single line typing is best for good foundation of typing . By this
                                    you will get
                                    ideas about the location of key's.</p>
                                <a href="./paratype.php">
                                    <div class="scroll-to-section">Start</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="features-post third-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-book"></i>Paragraph Typing</h4>
                            </div>
                            <div class="content-hide">
                                <p>With the practice of Paragraph typing you will become very frequent in typing and
                                    your error
                                    would definitely decrease your ratio </p>
                                <p class="hidden-sm">With the practice of Paragraph typing you will become very frequent
                                    in typing and
                                    your error
                                    would definitely decrease your ratio.</p>
                                <a href="./lengthypara.php">
                                    <div class="scroll-to-section">Start</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section why-us" data-section="section2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Why choose TypingSchool?</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id='tabs'>
                        <ul>
                            <li><a href='#tabs-1'>Best Education</a></li>
                            <li><a href='#tabs-2'>Top Management</a></li>
                            <li><a href='#tabs-3'>Quality Meeting</a></li>
                        </ul>
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/choose-us-image-01.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Best Education</h4>
                                        <p>TypingSchool is free educational HTML template with Bootstrap 4.5.2 CSS
                                            layout. Feel free to use it for educational or commercial purposes. You may
                                            want to make <a href="#" target="_parent" rel="sponsored">a little
                                                donation</a> . Please tell your
                                            friends about us. Thank you.</p>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/choose-us-image-02.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Top Level</h4>
                                        <p>You can modify this HTML layout by editing contents and adding more pages as
                                            you needed. Since this template has options to add dropdown menus, you can
                                            put many HTML pages.</p>
                                        <p>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio,
                                            nec interdum quam felis non ante.</p>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-3'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/choose-us-image-03.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Quality Meeting</h4>
                                        <p>You are NOT allowed to redistribute this template ZIP file on any template
                                            collection website. However, you can use this template to convert into a
                                            specific theme for any kind of CMS platform such as WordPress. For more
                                            information, you shall <a rel="nofollow" href="#" target="_parent">contact
                                                TemplateMo</a> now.</p>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    // code to check session and display content if user is login

    if (isset($_SESSION['newEmail'])) {
        include('./Feedback.php');
    } else {

        echo "
        <section class='section coming-soon' data-section='section3'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-7 col-xs-12'>
                    <div class='continer centerIt'>
                        <div>

                            <h4>Login your <em>Account</em> to access  <em>Typing Practice</em> & don't forget to give your valueable feedback 👍.</h4>
                            
                        </div>
                    </div>
                </div>
                <div class='col-md-5'>
                    <div class='right-content'>
                        <div class='top-content'>
                            <h6>Register your free account and <em>get immediate</em>  feedback</h6>
                        </div>
                        <form id='contact' action=' method='get'>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <fieldset>
                                        <input  name='name' type='text' class='form-control'  style='background:#253043' id='name' placeholder='Your Name'  readonly>
                                    </fieldset>
                                </div>
                                <div class='col-md-12'>
                                    <fieldset>
                                        <input name='email' type='text' class='form-control' id='email' style='background:#253043' placeholder='Your Email' readonly>
                                    </fieldset>
                                </div>
                                <div class='col-md-12'>
                                    <fieldset>
                                        <input name='phone-number' type='text' class='form-control' id='phone-number' style='background:#253043' placeholder='Your Feedback' readonly>
                                    </fieldset>
                                </div>
                                <div class='col-md-12'>
                                    <fieldset>
                                       
                                        <button   id='form-submit' class='button' disabled>Login to give feedback</button>
 
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>";
    }


    ?>


    <section class="section courses" data-section="section4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Choose Your Course</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="assets/images/courses-01.jpg" alt="Course #1">
                        <div class="down-content">
                            <h4>Digital Marketing</h4>
                            <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and
                                Pexels.</p>
                            <div class="author-image">
                                <img src="assets/images/author-01.png" alt="Author 1">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-02.jpg" alt="Course #2">
                        <div class="down-content">
                            <h4>Business World</h4>
                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac
                                ipsum porta.</p>
                            <div class="author-image">
                                <img src="assets/images/author-02.png" alt="Author 2">
                            </div>
                            <div class="text-button-free">
                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-03.jpg" alt="Course #3">
                        <div class="down-content">
                            <h4>Media Technology</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                lobortis enim.</p>
                            <div class="author-image">
                                <img src="assets/images/author-03.png" alt="Author 3">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-04.jpg" alt="Course #4">
                        <div class="down-content">
                            <h4>Communications</h4>
                            <p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and
                                Pexels.</p>
                            <div class="author-image">
                                <img src="assets/images/author-04.png" alt="Author 4">
                            </div>
                            <div class="text-button-free">
                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-05.jpg" alt="">
                        <div class="down-content">
                            <h4>Business Ethics</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                lobortis enim.</p>
                            <div class="author-image">
                                <img src="assets/images/author-05.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-01.jpg" alt="">
                        <div class="down-content">
                            <h4>Photography</h4>
                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac
                                ipsum porta.</p>
                            <div class="author-image">
                                <img src="assets/images/author-01.png" alt="">
                            </div>
                            <div class="text-button-free">
                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-02.jpg" alt="">
                        <div class="down-content">
                            <h4>Web Development</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                lobortis enim.</p>
                            <div class="author-image">
                                <img src="assets/images/author-02.png" alt="">
                            </div>
                            <div class="text-button-free">
                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-03.jpg" alt="">
                        <div class="down-content">
                            <h4>Learn HTML CSS</h4>
                            <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and
                                Pexels.</p>
                            <div class="author-image">
                                <img src="assets/images/author-03.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-04.jpg" alt="">
                        <div class="down-content">
                            <h4>Social Media</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                lobortis enim.</p>
                            <div class="author-image">
                                <img src="assets/images/author-04.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-05.jpg" alt="">
                        <div class="down-content">
                            <h4>Digital Arts</h4>
                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac
                                ipsum porta.</p>
                            <div class="author-image">
                                <img src="assets/images/author-05.png" alt="">
                            </div>
                            <div class="text-button-free">
                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-01.jpg" alt="">
                        <div class="down-content">
                            <h4>Media Streaming</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                lobortis enim.</p>
                            <div class="author-image">
                                <img src="assets/images/author-01.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section video" data-section="section5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="left-content">
                        <span>our presentation is for you</span>
                        <h4>Watch the video to learn more <em>about TypingSchool</em></h4>
                        <p>You are NOT allowed to redistribute this template ZIP file on any template collection
                            website. However, you can use this template to convert into a specific theme for any kind of
                            CMS platform such as WordPress. You may <a rel="nofollow" href="#" target="_parent">contact
                            </a> for
                            details.
                            <br><br>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec
                            interdum quam felis non ante.
                        </p>
                        <div class="main-button"><a rel="nofollow" href="#" target="_parent">External URL</a></div>
                    </div>
                </div>


                <div class="col-md-6">
                    <!-- <article class="video-item">
                        <div class="video-caption">
                            <h4>Advertise & Offer's</h4>
                        </div>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>








                            <div class="carousel-inner">
                                <?php
                                $sql = "SELECT * FROM `advertisement`";
                                $result = mysqli_query($conn, $sql);
                                $data_img = mysqli_fetch_assoc($result);
                                $img = $data_img['id'];
                                echo $img;
                                echo $data_img['id'];

                                echo '<img src="Img_upload/' . ($data_img['Advertise_Imgae']) . '" />';
                                while ($data_img = mysqli_fetch_assoc(
                                    $result
                                )) {
                                    echo '<img src="Img_upload/' . ($data_img['Advertise_Imgae']) . '" />';
                                }

                                ?>

                               <div class="carousel-item">
                                    <img class="d-block w-100" src="https://picsum.photos/500" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://cdn.lorem.space/images/game/.cache/500x500/spider-man.jpg" alt="Third slide">
                                </div>  
                            </div> 
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </article> -->
                    <?php
                    $sql = "SELECT * FROM `advertisement`";
                    $result = mysqli_query($conn, $sql);
                    $images = array();
                    while ($row = mysqli_fetch_assoc(
                        $result
                    )) {
                        $images[] = $row['Advertise_Imgae'];
                    }
                    echo '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">';
                    for ($i = 0; $i < count($images); $i++) {
                        if ($i == 0) {
                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $i . '" class="active"></li>';
                        } else {
                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $i . '"></li>';
                        }
                    }
                    echo '</ol>
                    <div class="carousel-inner">';
                    for ($i = 0; $i < count($images); $i++) {
                        if ($i == 0) {
                            echo '<div class="carousel-item active">
                            <img class="d-block w-100" src="../Img_upload/' . $images[$i] . '" alt="First slide">
                        </div>';
                        } else {
                            echo '<div class="carousel-item">
                            <img class="d-block w-100" src="../Img_upload/' . $images[$i] . '" alt="First slide">
                        </div>';
                        }
                    }
                    echo '</div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>';



                    ?>

                    <!-- design of carousel -->


                </div>
            </div>
        </div>
    </section>

    <section class="section contact" data-section="section6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Let’s Keep In Touch</h2>
                    </div>
                </div>
                <div class="col-md-12" style="text-align: center ">

                    <div>
                        <img src="./assets/images/vs.jpg" alt="Visiting_Card" srcset="">
                    </div>

                </div>

            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><i class="fa fa-copyright"></i> Copyright 2020 by TypingSchool

                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/SearchButton.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
            if ($(e.target).hasClass('external')) {
                return;
            }
            e.preventDefault();
            $('#menu').removeClass('active');
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });

        // search button js

        const basicAutocomplete = document.querySelector('#search-autocomplete');
        const data = ['One', 'Two', 'Three', 'Four', 'Five'];
        const dataFilter = (value) => {
            return data.filter((item) => {
                return item.toLowerCase().startsWith(value.toLowerCase());
            });
        };

        new mdb.Autocomplete(basicAutocomplete, {
            filter: dataFilter
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

</script>
</body>

</html>