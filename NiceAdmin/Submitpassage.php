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


if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $name = $_POST['name'];
  $passage = $_POST['passage'];
  $time = $_POST['time'];

  $sql = "INSERT INTO newpassages (title, name, passage, time) VALUES ('$title', '$name', '$passage', '$time')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    // alert message
    echo "<script>alert('Passage added successfully')</script>";
  } else {
    echo "<script>alert('Passage not added successfully')</script>";
  }
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Elements - NiceAdmin Bootstrap Template</title>
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

  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <main id='main' class='main'>

    <div class='pagetitle'>
      <h1>Form Elements</h1>
      <nav>
        <ol class='breadcrumb'>
          <li class='breadcrumb-item'><a href='index.html'>Home</a></li>
          <li class='breadcrumb-item'>Forms</li>
          <li class='breadcrumb-item active'>Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class='section'>
      <div class='row'>
        <div class='col-lg-12'>

          <div class='card'>
            <div class='card-body'>
              <h5 class='card-title'>New Passage </h5>

              <!-- General Form Elements -->
              <form method='POST' action='#'>
                <div class='row mb-3'>
                  <label for='inputText' class='col-sm-2 col-form-label'>Passage Title</label>
                  <div class='col-sm-10'>
                    <input type='text' name='title' class='form-control' required>
                  </div>
                </div>
                <div class='row mb-3'>
                  <label for='inputEmail' class='col-sm-2 col-form-label'>Passage Name</label>
                  <div class='col-sm-10'>
                    <input type='text' name='name' class='form-control' required>
                  </div>
                </div>



                <div class='row mb-3'>
                  <label for='passage' class='col-sm-2 col-form-label'>Textarea</label>
                  <div class='col-sm-10'>
                    <textarea class='form-control' style='height: 100px' name='passage' required></textarea>
                  </div>
                </div>
                <div class='row mb-3'>
                  <label for='passage' class='col-sm-2 col-form-label'>Time (minutes)</label>
                  <div class='col-sm-10'>
                    <select id='inputState' name='time' class='form-select'>
                      <option value='1'>1 </option>
                      <option value='5'>5 </option>
                      <option value='10'>10</option>
                      <option value='15'>15</option>
                      <option value='20'>20</option>
                    </select>
                  </div>
                </div>



                <div class='row mb-3'>
                  <label class='col-sm-2 col-form-label'>Submit </label>
                  <div class='col-sm-10'>
                    <button type='submit' name='submit' class='btn btn-primary'>Submit Passage</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>


      </div>
    </section>

  </main>


  <!-- ======= Footer ======= -->




</body>

</html>