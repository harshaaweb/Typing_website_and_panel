<?php
include('conn.php');
session_start();
if (!isset($_SESSION['data'])) {
  header('location:login.php');
} else {
  $dataEmail = $_SESSION['data'];
  $select = "SELECT * FROM admin WHERE email='$dataEmail'";
  $query = mysqli_query($conn, $select);
  $info = mysqli_fetch_assoc($query);
  $email = $info['email'];
  $admin_role = $info['role'];
  $admin_img = $info['image'];
}


// code to get user count 
$getUser = "SELECT COUNT(id) as id FROM users";
$query = mysqli_query($conn, $getUser);
$data = mysqli_fetch_assoc($query);

// code to get institute count
$getInstitute = "SELECT COUNT(id) as id FROM institute";
$sql = mysqli_query($conn, $getInstitute);
$fetchdata = mysqli_fetch_assoc($sql);



$getTotalAdmin = "SELECT * FROM admin";
$adminQuery = mysqli_query($conn, $getTotalAdmin);
$adminCount = mysqli_num_rows($adminQuery);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Typing Admin</title>
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
            <img src='./uploads/<?php echo  $admin_img; ?>' alt="" srcset="" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $admin_role; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $admin_role; ?> </h6>
              <span>Institute Head</span>
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
              <a class="dropdown-item d-flex align-items-center" href="./users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>



            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="./login.php">
                <i class=" bi bi-box-arrow-right"></i>
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
      </li>
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
      </li><!-- End Icons Nav -->

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
      </li><!-- End Components Nav -->

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





    </ul>

  </aside><!-- End Sidebar-->


  <!-- ======= Footer ======= -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">


                <div class="card-body">
                  <h5 class="card-title">Total <span>| Students</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo  $data['id']; ?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">


                <div class="card-body">
                  <h5 class="card-title">Total <span>| Institute</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-building"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo  $fetchdata['id'] ?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">



                <div class="card-body">
                  <h5 class="card-title">Total <span>| Admin</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $adminCount; ?></h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">


                <div class="card-body">
                  <h5 class="card-title">Recent Uploaded Test's </h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Name </th>
                        <th scope="col">Timer</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // code to get record of the passage
                      $getpassage = "SELECT * FROM newpassages ORDER BY id DESC";
                      $passage = mysqli_query($conn, $getpassage);
                      $passagedata = mysqli_fetch_assoc($passage);
                      $passagecount = mysqli_num_rows($passage);
                      if ($passagecount > 0) {
                        $i = 1;
                        do {
                      ?>
                          <tr>
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $passagedata['title'] ?></td>
                            <td><?php echo $passagedata['name'] ?></td>
                            <td><?php echo $passagedata['time'] ?></td>
                          </tr>
                      <?php
                          $i++;
                        } while ($passagedata = mysqli_fetch_assoc($passage));
                      }
                      ?>

                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Info</h6>
                    </li>

                    <li><a class="dropdown-item" href="./view_banner.php">View</a></li>

                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Live Banner <span>/Website</span></h5>
                  <?php
                  // code to get banner image from database
                  // order by desc
                  $getbanner = "SELECT * FROM banner_advertise ORDER BY id DESC";
                  $getresult = mysqli_query($conn, $getbanner);
                  $getdata = mysqli_fetch_assoc($getresult);
                  ?>


                  <div class="" style="width: auto;">
                    <img src="../Banners/<?php echo $getdata['banner_image'];  ?>" alt="banner" style="width:100%;">

                  </div>

                </div>

              </div>
            </div><!-- End Reports -->



            <!-- Top Selling -->
            <!-- <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Top Selling <span>| Today</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>$64</td>
                        <td class="fw-bold">124</td>
                        <td>$5,828</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                        <td>$46</td>
                        <td class="fw-bold">98</td>
                        <td>$4,508</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                        <td>$59</td>
                        <td class="fw-bold">74</td>
                        <td>$4,366</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                        <td>$32</td>
                        <td class="fw-bold">63</td>
                        <td>$2,016</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>$79</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div> -->
            <!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <!-- <div class="card">


            <div class="card-body">
              <h5 class="card-title">Information <span></span></h5>

              <div class="activity">

                <div class="activity-item d-flex">

                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    <marquee>
                      New Passage will be added in few minutes
                    </marquee>
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    <marquee>
                      Latest Test will be Uploaded for <a href="#" class="fw-bold text-dark">Subscriber's</a>
                    </marquee>
                  </div>
                </div>
              </div>

            </div>
          </div>  -->

          <!-- Budget Report -->
          <!-- <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Budget Report <span>| This Month</span></h5>

              <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    legend: {
                      data: ['Allocated Budget', 'Actual Spending']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Sales',
                          max: 6500
                        },
                        {
                          name: 'Administration',
                          max: 16000
                        },
                        {
                          name: 'Information Technology',
                          max: 30000
                        },
                        {
                          name: 'Customer Support',
                          max: 38000
                        },
                        {
                          name: 'Development',
                          max: 52000
                        },
                        {
                          name: 'Marketing',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Allocated Budget'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Actual Spending'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div> -->
          <!-- End Budget Report -->

          <!-- Website Traffic -->
          <!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class="card p-2">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Info</h6>
                </li>

                <li><a class="dropdown-item" href="./userview.php">View</a></li>
              </ul>
            </div>

            <div class="card-body  ">
              <h5 class="card-title">New Commers <span>/ students</span> </h5>
              <!-- code to get user with limit 5 and with desc order  -->
              <?php
              $getuser = "SELECT * FROM `users` ORDER BY `id` DESC LIMIT 5";
              $getuserquery = mysqli_query($conn, $getuser);
              while ($getuserrow = mysqli_fetch_assoc($getuserquery)) {
              ?>
                <div class="news">
                  <div class="post-item clearfix m-2">
                    <img src="../Webs/image/<?php echo $getuserrow['image'];  ?>" alt="">
                    <h4> <?php echo $getuserrow['name']; ?> </h4>
                    <p> <?php echo $getuserrow['email']; ?></p>
                    <p> <?php echo $getuserrow['date']; ?></p>
                  </div>

                <?php } ?>

                </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic <span>| Today</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div>
        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Typing Website</span></strong>. All Rights Reserved
    </div>
    <div class="credits">

    </div>
  </footer><!-- End Footer -->

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