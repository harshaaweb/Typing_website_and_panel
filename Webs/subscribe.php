 <?php
    include('./dbconfig.php');
    session_start();
    if (isset($_SESSION['newEmail'])) {
        // echo "done";
        if (isset($_POST['subscribe'])) {
            include('./dbconfig.php');
            $subscription = $_POST['subscription'];
            $email = $_SESSION['newEmail'];
            $insert = "update users set subscription='$subscription' WHERE email='$email'";
            mysqli_query($conn, $insert);
        }
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

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
     <title>Typing school</title>
     <script src="https://cdn.tailwindcss.com"></script>
 </head>

 <body class="font-sans" style="background-image:url('./assets/images/choosing-bg.jpg') ;">
     <!-- navbar -->
     <?php
        include('./header.php');
        ?>

     <!--Subscription-->
     <div class="px-3 py-12 relative top-[100px]">
         <div class="sm:w-[600px] md:w-[750px] lg:w-[1000px] xl:w-[1250px] m-auto font-sans font-normal text-[14px] leading-[20px] text-[#676f7b]">
             <h2 class="flex items-center text-3xl leading-[115%] md:text-5xl md:leading-[115%] font-semibold text-white justify-center w-[330px] m-auto">
                 <span class="mr-4 text-3xl md:text-4xl leading-none ">💎</span>
                 Subscription
             </h2>
             <p class="block text-sm mt-2 text-white sm:text-base dark:text-white text-center">
                 Pricing to fit the needs of any companies size.</p>

             <section class="text-white text-sm md:text-base overflow-hidden mt-[50px]">
                 <div class="grid lg:grid-cols-3 gap-5 xl:gap-8">
                     <div class="h-full relative px-6 py-8 rounded-3xl border-2 flex flex-col overflow-hidden border-neutral-100 dark:border-neutral-700 hover:border-[#efa423]">
                         <div class="mb-8">
                             <h3 class="block text-sm uppercase tracking-widest text-white mb-2 font-medium">
                                 Starter</h3>
                             <h2 class="text-5xl leading-none flex items-center text-white">
                                 <span> <i class="bi bi-currency-rupee"></i>100</span>
                                 <span class="text-lg ml-1 font-normal text-neutral-500">/mo</span>
                             </h2>
                         </div>
                         <nav class="space-y-4 mb-8">
                             <li class="flex items-center">
                                 <span class="mr-4 inline-flex flex-shrink-0 text-primary-6000">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                         <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd">
                                         </path>
                                     </svg>
                                 </span>
                                 <span class="text-white dark:text-neutral-300">1 Month subscription</span>
                             </li>
                             <li class="flex items-center">
                                 <span class="mr-4 inline-flex flex-shrink-0 text-primary-6000">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                         <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd">
                                         </path>
                                     </svg>
                                 </span>
                                 <span class="text-white dark:text-neutral-300">Automated Reporting</span>
                             </li>
                             <li class="flex items-center">
                                 <span class="mr-4 inline-flex flex-shrink-0 text-primary-6000">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                         <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd">
                                         </path>
                                     </svg>
                                 </span>
                                 <span class="text-white dark:text-neutral-300">Faster Processing</span>
                             </li>
                             <li class="flex items-center">
                                 <span class="mr-4 inline-flex flex-shrink-0 text-primary-6000">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                         <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                     </svg>
                                 </span>
                                 <span class="text-white dark:text-neutral-300">2 Passages Daily</span>
                             </li>
                             <li class="flex items-center">
                                 <span class="mr-4 inline-flex flex-shrink-0 text-primary-6000">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                         <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                     </svg>
                                 </span>
                                 <span class="text-white dark:text-neutral-300">Customizations</span>
                             </li>
                         </nav>
                         <div class="flex flex-col mt-auto">
                             <form method="post" action="pgRedirect.php">
                                 <input type="hidden" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000, 99999999) ?>">
                                 <input type="hidden" name="TXN_AMOUNT" value="5">
                                 <input type="hidden" name="CHANNEL_ID" value="WEB">
                                 <input type="hidden" name="INDUSTRY_TYPE_ID" value="Retail">
                                 <input name="CUST_ID" type="hidden" value="CUST001">
                                 <input type="hidden" name="subscription" value="starter">
                                 <button class="nc-Button relative h-auto inline-flex items-center justify-center rounded-[10px] transition-colors text-sm sm:text-base font-medium px-4 py-3 sm:px-6  ttnc-ButtonSecondary font-medium border bg-[#efa423] border-neutral-200 text-black   dark:text-neutral-300 dark:border-neutral-700 hover:bg-neutral-100 dark:hover:bg-neutral-800   focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-6000 dark:focus:ring-offset-0 w-full">
                                     <span class="font-medium">Buy</span>
                                 </button>
                             </form>

                             <p class="text-xs text-neutral-500 dark:text-neutral-400 mt-3"> Literally you
                                 probably haven't heard of them jean shorts.</p>

                         </div>
                     </div>
                     <div class="h-full relative px-6 py-8 rounded-3xl border-2 flex flex-col overflow-hidden border-primary-500 hover:border-[#efa423]">
                         <span class="bg-primary-500 text-white px-3 py-1 tracking-widest text-xs absolute right-3 top-3 rounded-full z-10">POPULAR</span>
                         <div class="mb-8">
                             <h3 class="block text-sm uppercase tracking-widest text-white mb-2 font-medium">
                                 intermediate</h3>
                             <h2 class="text-5xl leading-none flex items-center text-white">
                                 <span>
                                     <i class="bi bi-currency-rupee"></i>1000
                                 </span>
                                 <span class="text-lg ml-1 font-normal text-neutral-500">/mo</span>
                             </h2>
                         </div>
                         <nav class="space-y-4 mb-8">
                             <li class="flex items-center">
                                 <span class="mr-4 inline-flex flex-shrink-0 text-primary-6000">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                         <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                     </svg>
                                 </span>
                                 <span class="text-white dark:text-neutral-300">6 months subscription</span>
                             </li>
                             <li class="flex items-center">
                                 <span class="mr-4 inline-flex flex-shrink-0 text-primary-6000">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                         <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                     </svg>
                                 </span>
                                 <span class="text-white dark:text-neutral-300">Everything in
                                     Starter</span>
                             </li>
                             <li class="flex items-center">
                                 <span class="mr-4 inline-flex flex-shrink-0 text-primary-6000">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                         <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                     </svg>
                                 </span>
                                 <span class="text-white dark:text-neutral-300">100 Builds</span>
                             </li>
                             <li class="flex items-center">
                                 <span class="mr-4 inline-flex flex-shrink-0 text-primary-6000">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                         <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                     </svg>
                                 </span>
                                 <span class="text-white dark:text-neutral-300"> 6 Passages Daily</span>
                             </li>
                             <li class="flex items-center">
                                 <span class="mr-4 inline-flex flex-shrink-0 text-primary-6000">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                         <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                     </svg>
                                 </span>
                                 <span class="text-white dark:text-neutral-300">Progress Reports</span>
                             </li>
                         </nav>
                         <div class="flex flex-col mt-auto">
                             <form method="post" action="pgRedirect.php">
                                 <input type="hidden" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000, 99999999) ?>">
                                 <input type="hidden" name="TXN_AMOUNT" value="15">
                                 <input type="hidden" name="CHANNEL_ID" value="WEB">
                                 <input type="hidden" name="INDUSTRY_TYPE_ID" value="Retail">
                                 <input name="CUST_ID" type="hidden" value="CUST001">
                                 <input type="hidden" name="subscription" value="intermediate">
                                 <button class="nc-Button relative h-auto inline-flex items-center justify-center rounded-[10px] transition-colors text-sm sm:text-base font-medium px-4 py-3 sm:px-6  ttnc-ButtonSecondary font-medium border bg-[#efa423] border-neutral-200 text-black   dark:text-neutral-300 dark:border-neutral-700 hover:bg-neutral-100 dark:hover:bg-neutral-800   focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-6000 dark:focus:ring-offset-0 w-full" name="subscribe">
                                     <span class="font-medium">Buy</span>
                                 </button>
                             </form>

                             <p class="text-xs text-neutral-500 dark:text-neutral-400 mt-3"> Literally you
                                 probably haven't heard of them jean shorts.</p>

                         </div>
                     </div>
                     <div class="h-full relative px-6 py-8 rounded-3xl border-2 flex flex-col overflow-hidden border-neutral-100 dark:border-neutral-700 hover:border-[#efa423]">
                         <div class="mb-8">
                             <h3 class="block text-sm uppercase tracking-widest text-white mb-2 font-medium">
                                 Plus</h3>
                             <h2 class="text-5xl leading-none flex items-center text-white">
                                 <span>
                                     <i class="bi bi-currency-rupee"></i>1200
                                 </span>
                                 <span class="text-lg ml-1 font-normal text-neutral-500">/mo</span>
                             </h2>
                         </div>
                         <nav class="space-y-4 mb-8">
                             <li class="flex items-center"><span class="mr-4 inline-flex flex-shrink-0 text-primary-6000">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                         <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                     </svg>
                                 </span>
                                 <span class="text-white dark:text-neutral-300">1 Year subscription</span>
                             </li>
                             <li class="flex items-center"><span class="mr-4 inline-flex flex-shrink-0 text-primary-6000">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                         <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                     </svg>
                                 </span>
                                 <span class="text-white dark:text-neutral-300">Everything in Basic</span>
                             </li>
                             <li class="flex items-center">
                                 <span class="mr-4 inline-flex flex-shrink-0 text-primary-6000">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                         <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                     </svg>
                                 </span>
                                 <span class="text-white dark:text-neutral-300">Unlimited Builds</span>
                             </li>
                             <li class="flex items-center">
                                 <span class="mr-4 inline-flex flex-shrink-0 text-primary-6000">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                         <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                     </svg>
                                 </span>
                                 <span class="text-white dark:text-neutral-300">6 Passages Daily</span>
                             </li>
                             <li class="flex items-center">
                                 <span class="mr-4 inline-flex flex-shrink-0 text-primary-6000">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                         <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                     </svg>
                                 </span>
                                 <span class="text-white dark:text-neutral-300">Company Evaluations</span>
                             </li>
                         </nav>
                         <div class="flex flex-col mt-auto">
                             <form method="post" action="pgRedirect.php">
                                 <input type="hidden" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000, 99999999) ?>">
                                 <input type="hidden" name="TXN_AMOUNT" value="25">
                                 <input type="hidden" name="CHANNEL_ID" value="WEB">
                                 <input type="hidden" name="INDUSTRY_TYPE_ID" value="Retail">
                                 <input name="CUST_ID" type="hidden" value="CUST001">
                                 <button class="nc-Button relative h-auto inline-flex items-center justify-center rounded-[10px] transition-colors text-sm sm:text-base font-medium px-4 py-3 sm:px-6  ttnc-ButtonSecondary font-medium border bg-[#efa423] border-neutral-200 text-black   dark:text-neutral-300 dark:border-neutral-700 hover:bg-neutral-100 dark:hover:bg-neutral-800   focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-6000 dark:focus:ring-offset-0 w-full" name="subscribe">
                                     <span class="font-medium">Buy</span>
                                 </button>
                             </form>

                             <p class="text-xs text-neutral-500 dark:text-neutral-400 mt-3"> Literally you
                                 probably haven't heard of them jean shorts.</p>

                         </div>
                     </div>
                 </div>
             </section>
             <!-- code to display fetched images in carousel -->



             <div style="margin-top: 80px;">
                 <h2 class="flex items-center text-3xl leading-[115%] md:text-5xl md:leading-[115%] font-semibold text-white justify-center w-[330px] m-auto">
                     <span class="mr-4 text-3xl md:text-4xl leading-none ">🆕</span>
                     Offer's
                 </h2>
                 <p class="block text-sm mt-2 text-white sm:text-base dark:text-white text-center">
                     All other offer's have been displaying here.</p>
                 <?php
                    // order by id desc
                    $select_banner = "SELECT * FROM `banner_advertise` ORDER BY id DESC";
                    $get_result = mysqli_query($conn, $select_banner);
                    $data = mysqli_fetch_assoc($get_result);
                    $iid = $data['id'];
                    $image = $data['banner_image'];
                    ?>



                 <div class="flex items-center justify-content-center h-[200px] w-[100%] ">
                     <!-- image tag to dsiplay image  -->
                     <img src="<?php echo $image; ?>" class="mt-8 h-[100%] w-[100%] bg-cover " alt="" srcset="">
                 </div>
             </div>

         </div>
     </div>





     <script>
         var menu_icon = document.getElementsByClassName("menu_icon");
         var menu_icon_bottom = document.getElementsByClassName("menu_icon_bottom");
         var close_icon = document.getElementsByClassName("close_icon");
         var sidebar = document.getElementsByClassName("sidebar");

         menu_icon[0].onclick = function() {
             sidebar[0].style.left = "0";
         };
         menu_icon_bottom[0].onclick = function() {
             sidebar[0].style.left = "0";
         };
         close_icon[0].onclick = function() {
             sidebar[0].style.left = "-385px";
         };
     </script>
     <script>
         var level1_li = document.getElementsByClassName("level1_li");
         var level1_content = document.getElementsByClassName("level1_content");

         level1_li[0].onclick = function() {
             if (level1_content[0].style.height == "0px") {
                 level1_content[0].style.height = "100%";
             } else {
                 level1_content[0].style.height = "0px";
             }
         };
         level1_li[1].onclick = function() {
             if (level1_content[1].style.height == "0px") {
                 level1_content[1].style.height = "100%";
             } else {
                 level1_content[1].style.height = "0px";
             }
         };
         level1_li[2].onclick = function() {
             if (level1_content[2].style.height == "0px") {
                 level1_content[2].style.height = "100%";
             } else {
                 level1_content[2].style.height = "0px";
             }
         };
         level1_li[3].onclick = function() {
             if (level1_content[3].style.height == "0px") {
                 level1_content[3].style.height = "100%";
             } else {
                 level1_content[3].style.height = "0px";
             }
         };
     </script>
     <script>
         var level2_li = document.getElementsByClassName("level2_li");
         var level2_content = document.getElementsByClassName("level2_content");

         level2_li[0].onclick = function() {
             if (level2_content[0].style.height == "0px") {
                 level2_content[0].style.height = "100%";
             } else {
                 level2_content[0].style.height = "0px";
             }
         };
         level2_li[1].onclick = function() {
             if (level2_content[1].style.height == "0px") {
                 level2_content[1].style.height = "100%";
             } else {
                 level2_content[1].style.height = "0px";
             }
         };
         level2_li[2].onclick = function() {
             if (level2_content[2].style.height == "0px") {
                 level2_content[2].style.height = "100%";
             } else {
                 level2_content[2].style.height = "0px";
             }
         };
         level2_li[3].onclick = function() {
             if (level2_content[3].style.height == "0px") {
                 level2_content[3].style.height = "100%";
             } else {
                 level2_content[3].style.height = "0px";
             }
         };
         level2_li[4].onclick = function() {
             if (level2_content[4].style.height == "0px") {
                 level2_content[4].style.height = "100%";
             } else {
                 level2_content[4].style.height = "0px";
             }
         };
     </script>
     <script>
         var profile_dropdown_link = document.getElementsByClassName("profile_dropdown_link")[0];
         var profile_dropdown = document.getElementsByClassName("profile_dropdown")[0];
         var notifications_dropdown_link = document.getElementsByClassName("notifications_dropdown_link")[0];
         var notifications_dropdown = document.getElementsByClassName("notifications_dropdown")[0];

         profile_dropdown_link.onclick = function() {
             if (profile_dropdown.style.display == "none") {
                 profile_dropdown.style.display = "block";
             } else {
                 profile_dropdown.style.display = "none";
             }
         };
         // profile_dropdown.addEventListener("mouseout",function(){
         //     profile_dropdown.style.display = "none";
         // });
         notifications_dropdown_link.onclick = function() {
             if (notifications_dropdown.style.display == "none") {
                 notifications_dropdown.style.display = "block";
             } else {
                 notifications_dropdown.style.display = "none";
             }
         };
         // notifications_dropdown.addEventListener("mouseout",function(){
         //     notifications_dropdown.style.display = "none";
         // });
     </script>
     <script>
         $(".carousel").owlCarousel({
             loop: true,
             margin: 50,
             autoplay: true,
             autoplayTimeout: 10000,
             autoplayHoverPause: true,
             nav: true,
             navText: ["<i class='fa-solid fa-chevron-left'></i>",
                 "<i class='fa-solid fa-chevron-right'></i>"
             ],
             responsive: {
                 0: {
                     items: 1,
                 },
                 400: {
                     items: 2,
                 },
                 700: {
                     items: 3,
                 },
                 900: {
                     items: 4,
                 },
                 1300: {
                     items: 5,
                 }
             }
         })

         $(".carousel1").owlCarousel({
             loop: true,
             margin: 50,
             autoplay: true,
             autoplayTimeout: 3000,
             autoplayHoverPause: true,
             nav: false,
             responsive: {
                 0: {
                     items: 1,
                 },
                 2000: {
                     items: 1,
                 }
             }
         })

         $(".carousel2").owlCarousel({
             loop: true,
             margin: 50,
             autoplay: true,
             autoplayTimeout: 3000,
             autoplayHoverPause: true,
             nav: true,
             navText: ["<i class='fa-solid fa-chevron-left'></i>",
                 "<i class='fa-solid fa-chevron-right'></i>"
             ],
             responsive: {
                 0: {
                     items: 1,
                 },
                 400: {
                     items: 2,
                 },
                 800: {
                     items: 3,
                 },
                 1300: {
                     items: 4,
                 },
                 1500: {
                     items: 5,
                 }
             }
         })
     </script>
     <script>
         var featured_places = document.getElementsByClassName("featured_places");

         featured_places[0].onclick = function() {
             featured_places[0].style.background = "#115e59";
             featured_places[0].style.color = "#fff";
             featured_places[1].style.background = "none";
             featured_places[1].style.color = "#6b7280";
             featured_places[2].style.background = "none";
             featured_places[2].style.color = "#6b7280";
             featured_places[3].style.background = "none";
             featured_places[3].style.color = "#6b7280";
         }
         featured_places[1].onclick = function() {
             featured_places[0].style.background = "none";
             featured_places[0].style.color = "#6b7280";
             featured_places[1].style.background = "#115e59";
             featured_places[1].style.color = "#fff";
             featured_places[2].style.background = "none";
             featured_places[2].style.color = "#6b7280";
             featured_places[3].style.background = "none";
             featured_places[3].style.color = "#6b7280";
         }
         featured_places[2].onclick = function() {
             featured_places[0].style.background = "none";
             featured_places[0].style.color = "#6b7280";
             featured_places[1].style.background = "none";
             featured_places[1].style.color = "#6b7280";
             featured_places[2].style.background = "#115e59";
             featured_places[2].style.color = "#fff";
             featured_places[3].style.background = "none";
             featured_places[3].style.color = "#6b7280";
         }
         featured_places[3].onclick = function() {
             featured_places[0].style.background = "none";
             featured_places[0].style.color = "#6b7280";
             featured_places[1].style.background = "none";
             featured_places[1].style.color = "#6b7280";
             featured_places[2].style.background = "none";
             featured_places[2].style.color = "#6b7280";
             featured_places[3].style.background = "#115e59";
             featured_places[3].style.color = "#fff";
         }

         featured_places[0].addEventListener("mouseover", function() {
             if (featured_places[0].style.background == "none") {
                 featured_places[0].style.color = "#111827";
             }
         });
         featured_places[0].addEventListener("mouseout", function() {
             if (featured_places[0].style.background == "none") {
                 featured_places[0].style.color = "#6b7280";
             }
         });

         featured_places[1].addEventListener("mouseover", function() {
             if (featured_places[1].style.background == "none") {
                 featured_places[1].style.color = "#111827";
             }
         });
         featured_places[1].addEventListener("mouseout", function() {
             if (featured_places[1].style.background == "none") {
                 featured_places[1].style.color = "#6b7280";
             }
         });

         featured_places[2].addEventListener("mouseover", function() {
             if (featured_places[2].style.background == "none") {
                 featured_places[2].style.color = "#111827";
             }
         });
         featured_places[2].addEventListener("mouseout", function() {
             if (featured_places[2].style.background == "none") {
                 featured_places[2].style.color = "#6b7280";
             }
         });

         featured_places[3].addEventListener("mouseover", function() {
             if (featured_places[3].style.background == "none") {
                 featured_places[3].style.color = "#111827";
             }
         });
         featured_places[3].addEventListener("mouseout", function() {
             if (featured_places[3].style.background == "none") {
                 featured_places[3].style.color = "#6b7280";
             }
         });

         // 
     </script>
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