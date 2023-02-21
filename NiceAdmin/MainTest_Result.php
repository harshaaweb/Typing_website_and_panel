<?php
include('conn.php');
include('./header.php');

if (!isset($_SESSION['data'])) {
    header('location:login.php');
} else {
    $dataEmail = $_SESSION['data'];
    $select = "SELECT * FROM admin WHERE email='$dataEmail'";
    $query = mysqli_query($conn, $select);
    $info = mysqli_fetch_assoc($query);
    echo $role = $info['role'];

    if ($role != 'admin') {
        echo "<script>alert('You are not authorized to access this page')</script>";
        echo "<script>window.location.href='./index.php'</script>";
    }
}




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



        </ul>

    </aside><!-- End Sidebar-->


    <!-- ======= Footer ======= -->

    <main id="main" class="main">



        <section class="section dashboard">

            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">


                    </div><!-- End Customers Card -->
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">


                            <div class="card-body">
                                <h5 class="card-title">Real test result's </h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">WPM</th>
                                            <th scope="col">CPM </th>
                                            <th scope="col">Accuracy</th>
                                            <th scope="col">Passage_Time</th>
                                            <th scope="col">Passage_Name</th>
                                            <th scope="col">Error</th>
                                            <th scope="col">User</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // code to get record of the passage
                                        $getpassage = "SELECT * FROM maintestrecord ORDER BY id DESC";
                                        $passage = mysqli_query($conn, $getpassage);
                                        $passagedata = mysqli_fetch_assoc($passage);
                                        $passagecount = mysqli_num_rows($passage);
                                        if ($passagecount > 0) {
                                            $i = 1;
                                            do {
                                        ?>
                                                <tr>
                                                    <th scope="row"><?php echo $i ?></th>
                                                    <td><?php echo $passagedata['wpm'] ?></td>
                                                    <td><?php echo $passagedata['cpm'] ?></td>
                                                    <td><?php echo $passagedata['accuracy'] ?> %</td>
                                                    <td><?php echo $passagedata['passagetime'] ?> min</td>
                                                    <td><?php echo $passagedata['passageName'] ?></td>
                                                    <td><?php echo $passagedata['error'] ?></td>
                                                    <td><?php echo $passagedata['user'] ?></td>
                                                    <td><?php echo $passagedata['date'] ?></td>
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



                </div>
            </div><!-- End Left side columns -->

            </div>
        </section>

    </main><!-- End #main -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>