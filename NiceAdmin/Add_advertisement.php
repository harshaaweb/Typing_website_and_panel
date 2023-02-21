<?php
include('conn.php');
include('header.php');
// code to alert if s_email 
if (!isset($_SESSION['data'])) {
    header('location:./login.php');
} else {
    $dataEmail = $_SESSION['data'];
    $select = "SELECT * FROM admin WHERE email='$dataEmail'";
    $query = mysqli_query($conn, $select);
    $info = mysqli_fetch_assoc($query);
    $role = $info['role'];

    if ($role != 'admin') {
        echo "<script>alert('You are not authorized to access this page')</script>";
        echo "<script>window.location.href='./index.php'</script>";
    } else {
        if (isset($_POST['submit'])) {

            $image = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $path = '../Img_upload/' . $image;
            move_uploaded_file($tmp_name, $path);

            $insert = "INSERT INTO `advertisement`(`Advertise_Imgae`) VALUES ('$path')";
           
            $run = mysqli_query($conn, $insert);
            if ($run) {
                echo "<script>alert('Advertisement Added Successfully');
                    console.log('image added successfully');
                </script>";
            } else {
                echo "<script>alert('Advertisement Not Added')
                    console.log('image not added');
                </script>";
            }
        }
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Typing_Admin</title>
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


</head>

<body>



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Elements</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Elements</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">New Adveritsement </h5>

                            <!-- General Form Elements -->
                            <form method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Advertisement Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit </label>
                                    <div class="col-sm-10">
                                        <button name="submit" class="btn btn-primary">Add Advertisement</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->




</body>

</html>