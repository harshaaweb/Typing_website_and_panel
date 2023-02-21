<?php
include('conn.php');
include('header.php');

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

    <title> </title>
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

    <style>
        .auto-grid {
            --auto-grid-min-size: 16rem;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(var(--auto-grid-min-size), 1fr));
            grid-gap: 1rem;
            margin-right: 25px;
        }



        /* -------------- */

        .image-area {
            position: relative;
            width: 100%;
        }

        .image-area img {
            max-width: 100%;
            height: auto;
        }

        .remove-image {
            display: none;
            position: absolute;
            top: -10px;
            right: -10px;
            border-radius: 10em;
            padding: 2px 6px 3px;
            text-decoration: none;
            font: 700 21px/20px sans-serif;
            background: #555;
            border: 3px solid #fff;
            color: #FFF;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5), inset 0 2px 4px rgba(0, 0, 0, 0.3);
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
            -webkit-transition: background 0.5s;
            transition: background 0.5s;
        }

        .remove-image:hover {
            background: #E54E4E;
            padding: 3px 7px 5px;
            top: -11px;
            right: -11px;
            color: black;
        }

        .remove-image:active {
            background: #E54E4E;
            top: -10px;
            right: -11px;
        }
    </style>


</head>

<body>


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Advertisement</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">advertisement</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">advertisement</h5>

                            <ul class="auto-grid">
                                <!-- code to fetch all images from database and display in the liitem -->
                                <?php
                                $select = "SELECT * FROM advertisement";
                                $query = mysqli_query($conn, $select);
                                while ($info = mysqli_fetch_assoc($query)) {
                                    $image = $info['Advertise_Imgae'];
                                    $id = $info['id'];



                                ?>

                                    <div class="image-area">
                                        <img src="<?php echo $info['Advertise_Imgae']; ?>" alt="Preview">
                                        <a class="remove-image" href="./Delete_advertisement.php?id=<?php echo $info['id']; ?>" style="display: inline;">&#215;</a>
                                    </div>

                                <?php   }
                                ?>




                            </ul>



                        </div>
                    </div>


                </div>

        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->


</body>

</html>