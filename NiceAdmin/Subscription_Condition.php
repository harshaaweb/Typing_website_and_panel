<?php
include('conn.php');
include('header.php');

if (!isset($_SESSION['data'])) {
    header('location:./login.php');
} else {
    $dataEmail = $_SESSION['data'];
    $select = "SELECT * FROM admin WHERE email='$dataEmail'";
    $query = mysqli_query($conn, $select);
    $info = mysqli_fetch_assoc($query);
    echo $role = $info['role'];

    // code to select subscription value from db
    $select = "SELECT * FROM susbcribe_plan_access WHERE id=1";
    $info = mysqli_query($conn, $select);
    $data = mysqli_fetch_assoc($info);


    if ($role != 'admin') {
        echo "<script>alert('You are not authorized to access this page')</script>";
        echo "<script>window.location.href='./index.php'</script>";
    } else {
        if (isset($_POST['update'])) {

            $subscription = $_POST['subscription'];
            $update = "UPDATE susbcribe_plan_access SET subscription='$subscription' WHERE id=1";
            $query = mysqli_query($conn, $update);
            if ($query) {
                echo "<script>alert('Subscription Condition Updated Successfully')</script>";
                echo "<script>window.location.href='./Subscription_Condition.php'</script>";
            } else {
                echo "<script>alert('Subscription Condition Not Updated Successfully')</script>";
                echo "<script>window.location.href='./Subscription_Condition.php'</script>";
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
            <h1>Edit Subscribtion </h1>
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
                            <h5 class="card-title">You are able to turn off/on your subscription condition </h5>

                            <form method='post'>

                                <div class='row mb-3'>
                                    <label class='col-sm-2 col-form-label'>Subscription</label>
                                    <div class='col-sm-10'>
                                        <div class='form-control'>
                                            <?php echo $data['subscription']; ?> </div>
                                    </div>
                                </div>
                                <div class='row mb-3'>
                                    <label for='passage' class='col-sm-2 col-form-label'>Change Subscription</label>
                                    <div class='col-sm-10'>
                                        <select id='inputState' name='subscription' class='form-select'>
                                            <option>Select Status-- </option>
                                            <option value='on'>On </option>
                                            <option value='off'>Off </option>

                                        </select>
                                    </div>
                                </div>



                                <div class='row mb-3'>
                                    <label class='col-sm-2 col-form-label'>Submit </label>
                                    <div class='col-sm-10'>
                                        <button type='submit' name='update' class='btn btn-primary'>Update</button>
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