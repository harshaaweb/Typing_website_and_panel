<?php
session_start();
$s_email = $_SESSION['data'];
if (!isset($_SESSION['data'])) {
  echo "<script>window.location.href='./login.php'</script>";
} else {
  $get_data = "SELECT * FROM admin WHERE email='$s_email'";
  $run_data = mysqli_query($conn, $get_data);
  $data = mysqli_fetch_assoc($run_data);
  $role = $data['role'];
  $admin_img = $data['image'];
  // alert
}
// code to get data form session 


// code to alert s_email
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Typing Panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">TypingAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
       <form class="search-form d-flex align-items-center" method="POST" action="#">
         <input type="text" name="query" placeholder="Search" title="Enter search keyword">
         <button type="submit" title="Search"><i class="bi bi-search"></i></button>
       </form>
     </div> -->
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <!-- <li class="nav-item d-block d-lg-none">
           <a class="nav-link nav-icon search-bar-toggle " href="#">
             <i class="bi bi-search"></i>
           </a>
         </li> -->
        <!-- End Search Icon-->


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="<?php echo  $admin_img ?>" alt="Profile" class="rounded-circle"> -->
            <!-- display the fetched image of admin -->
            <img src='./uploads/<?php echo  $admin_img; ?>' alt="" srcset="" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $role ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $role ?></h6>
              <span>Institute Head</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>


            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="./login.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Passages</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="Submitpassage.php">
              <i class="bi bi-circle"></i><span>New Passage</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#institute-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-building"></i><span>Institutes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="institute-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="viewInstitute.php">
              <i class="bi bi-circle"></i><span>View Institutes</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="userview.php">
              <i class="bi bi-circle"></i><span>View Users</span>
            </a>
          </li>

        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-chat-quote"></i><span>Feedback</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="./ViewFeedback.php">
              <i class="bi bi-circle"></i><span>View Feedback's</span>
            </a>
          </li>

        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Test Result</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="./MainTest_Result.php">
              <i class="bi bi-circle"></i><span>Real Test Result</span>
            </a>
          </li>
          <li>
            <a href="./Winner.php">
              <i class="bi bi-circle"></i><span>Winner</span>
            </a>
          </li>

        </ul>
      </li>
      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="./pages-register.php">
          <i class="bi bi-person"></i>
          <span>Add Sub-Admin</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="./View_All_admins.php">
          <i class="bi bi-people"></i>
          <span>View Sub-Admin</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="./Subscription_Condition.php">
          <i class="bi bi-receipt"></i>
          <span>Subscribtion</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="./CRM.php">
          <i class="bi bi-boxes"></i>
          <span>C.R.M</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="./Add_advertisement.php">
          <i class="bi bi-images"></i>
          <span>Add Adveritsement</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="./View_addvertisement.php">
          <i class="bi bi-images"></i>
          <span>View Adveritsement</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="./Add_banner.php">
          <i class="bi bi-image-alt"></i>

          <span>Add Banner</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="./view_banner.php">
          <i class="bi bi-image-alt"></i>
          <span>View Banner</span>
        </a>
      </li>


      <!-- <li class="nav-item">
         <a class="nav-link collapsed" href="pages-register.php">
           <i class="bi bi-card-list"></i>
           <span>Register</span>
         </a>
       </li> -->
      <!-- End Register Page Nav -->



    </ul>

  </aside><!-- End Sidebar-->


  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>