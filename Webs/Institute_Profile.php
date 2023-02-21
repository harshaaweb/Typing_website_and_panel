<?php
    session_start();

    include('./dbconfig.php');

    if (isset($_SESSION['instituteEmail'])) {
        $Session_email = $_SESSION['instituteEmail'];
        // echo $Session_email;
        $select = "SELECT  * from institute WHERE instituteEmail='$Session_email'  ";
        $query = mysqli_query($conn, $select);
        $data = mysqli_fetch_assoc($query);


        // getting info of institue name  from database 
        // $info = "SELECT * FROM institute WHERE instituteReferenceID='$data[referBY]'";
        // $infoQuery = mysqli_query($conn, $info);
        // $infoData = mysqli_fetch_assoc($infoQuery);
    } else {
        header("location:./login.php");
    }


    ?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="./assets/css/userprofile.css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     <title>Typing School</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     <!-- Bootstrap core CSS -->
     <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
     <!-- Additional CSS Files -->
     <link rel="stylesheet" href="assets/css/fontawesome.css">
     <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
     <link rel="stylesheet" href="assets/css/owl.css">
     <link rel="stylesheet" href="assets/css/lightbox.css">
 </head>
 <style>
     .row {
         margin-left: 0px;
         margin-right: 0px;
     }
 </style>

 <body>

     <!--header-->
     <?php
        // include('./header.php')  
        ?>
     <div class="page-content page-container" id="page-content" style="margin-top: 100px;">
         <div class="padding">
             <div class="row  d-flex justify-content-center">
                 <div class="col-xl-6 col-md-12">
                     <div class="card user-card-full">
                         <div class="row m-l-0 m-r-0">
                             <div class="col-sm-4   user-profile" style="background-color: #efa423;">
                                 <div class="card-block text-center text-white">
                                     <div class="m-b-25" style="width: 100px; margin:auto;">
                                         <img src="https://i.pinimg.com/736x/8f/ea/46/8fea46237f0da265d3018065f122c6a1.jpg" class="img-radius" alt="User-Profile-Image" style="width: 100px; margin-bottom:15px">
                                     </div>
                                     <h6 class="f-w-600"><?php echo $data['instituteName']; ?></h6>
                                     <p>Institute</p>
                                     <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                 </div>
                             </div>
                             <div class="col-sm-8">
                                 <div class="card-block">
                                     <div class="m-b-20 p-b-5 b-b-default f-w-600 justify-content-between " style="display: flex;  ">
                                         <div> Information</div>
                                         <div>
                                             <a href="./logout.php"><button style=" border: none; background:#efa423; color:white">Logout</button></a>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-sm-6">
                                             <p class="m-b-10 f-w-600">Email</p>
                                             <h6 class="text-muted f-w-400"><?php echo $data['instituteEmail']; ?></h6>
                                         </div>
                                     
                                         <div class="col-sm-6">
                                             <p class="m-b-10 f-w-600">C.E.O</p>
                                             <h6 class="text-muted f-w-400"><?php echo $data['instituteCeo']; ?></h6>
                                         </div>


                                     </div>


                                     <div class="row" style="margin-top:20px;">
                                         <div class="col-sm-6">
                                             <p class="m-b-10 f-w-600">Institute_Ref_ID</p>
                                             <h6 class="text-muted f-w-400"><?php echo $data['instituteReferenceID']; ?></h6>
                                         </div>
                                         <div class="col-sm-6">
                                             <p class="m-b-10 f-w-600">License No:</p>
                                             <h6 class="text-muted f-w-400"><?php echo $data['instituteLicenseNo']; ?></h6>
                                         </div>
                                    


                                     </div>
                                     <div class="row">
                                     <div class="col-sm-6">
                                             <p class="m-b-10 f-w-600">Address</p>
                                             <h6 class="text-muted f-w-400"><?php echo $data['instituteAddress']; ?></h6>
                                         </div>

                                     </div>
                                     <ul class="social-link list-unstyled m-t-40 m-b-10">
                                         <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                         <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                         <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
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
 </body>

 </html>