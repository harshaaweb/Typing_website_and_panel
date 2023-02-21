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
    } else {
        $id = $_GET['id'];
        $select = "SELECT * FROM admin WHERE id='$id'";
        $getData = mysqli_query($conn, $select);
        $fetchedvalue = mysqli_fetch_assoc($getData);
        // update role by id
        if (isset($_POST['submit'])) {
            $role = $_POST['role'];
            $update = "UPDATE admin SET role='$role' WHERE id='$id'";
            $query = mysqli_query($conn, $update);
            if ($query) {
                echo "<script>alert('Role Updated')</script>";
                echo "<script>window.location.href='./index.php'</script>";
            } else {
                echo "<script>alert('Role Not Updated')</script>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Sub-Admin Role</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Change Role of Sub-Admin</h5>

                            <form method='post'>
                                <div class='row mb-3'>
                                    <label class='col-sm-2 col-form-label'>Sub-Admin Name</label>
                                    <div class='col-sm-10'>
                                        <div class='form-control'>
                                            <?php echo $fetchedvalue['name']; ?> </div>
                                    </div>
                                </div>
                                <div class='row mb-3'>
                                    <label class='col-sm-2 col-form-label'>Sub-Admin Email</label>
                                    <div class='col-sm-10'>
                                        <div class='form-control'>
                                            <?php echo $fetchedvalue['email']; ?> </div>
                                    </div>
                                </div>
                                <div class='row mb-3'>
                                    <label class='col-sm-2 col-form-label'>Previous Role</label>
                                    <div class='col-sm-10'>
                                        <div class='form-control'>
                                            <?php echo $fetchedvalue['role']; ?> </div>
                                    </div>
                                </div>





                                <div class='row mb-3'>
                                    <label for='passage' class='col-sm-2 col-form-label'>New Role</label>
                                    <div class='col-sm-10'>
                                        <select id='inputState' name='role' class='form-select'>
                                            <option value='subadmin'>Subadmin </option>
                                            <option value='admin'>Admin </option>

                                        </select>
                                    </div>
                                </div>



                                <div class='row mb-3'>
                                    <label class='col-sm-2 col-form-label'>Update New Role </label>
                                    <div class='col-sm-10'>
                                        <button type='submit' name='submit' class='btn btn-primary'>Update Role</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>


                </div>

        </section>

    </main>
</body>

</html>