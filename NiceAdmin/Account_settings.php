<?php


$dataEmail = $_SESSION['data'];
$select = "SELECT * FROM admin WHERE email='$dataEmail'";
$query = mysqli_query($conn, $select);
$checkdata = mysqli_fetch_assoc($query);
$session_email = $checkdata['email'];


if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $cpsw = $_POST['cpsw'];
    $image = $_FILES['image']['name'];
    $tpm_name = $_FILES['image']['tmp_name'];
    $path = "./uploads/" . $image;
    move_uploaded_file($tpm_name, $path);

    if ($password == $cpsw) {
        $update = "UPDATE admin SET name='$name',email='$email',number='$number',password='$password',image='$image' WHERE email='$session_email'";

        $query = mysqli_query($conn, $update);
        if ($query) {
            echo "<script>alert('Data Updated Successfully')</script>";
            session_unset();
            session_destroy();
            echo "<script>window.location.href='./login.php';</script>";
        } else {
            echo "<script>alert('Data Not Updated')</script>";
            echo "<script>window.location.href='./users-profile.php'</script>";
        }
    } else {
        echo "<script>alert('Password Not Matched')</script>";
        echo "<script>window.location.href='./users-profile.php'</script>";
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


    <!-- Profile Edit Form -->
    <form method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
            <div class="col-md-8 col-lg-9">
                <img src="./uploads/<?php echo $checkdata['image']; ?>" alt="Profile">
                <div class="pt-2">
                    <input type="file" name="image" class="btn btn-primary btn-sm" title="Upload new profile image" required> </input>
                    <!-- <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a> -->
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
            <div class="col-md-8 col-lg-9">

                <input name="name" type="text" class="form-control" id="fullName" placeholder="<?php echo $role = $checkdata['name']; ?>" required>
            </div>
        </div>



        <div class="row mb-3">
            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
            <div class="col-md-8 col-lg-9">
                <input name="email" type="email" class="form-control" placeholder="<?php echo $role = $checkdata['email']; ?>" id="email" required>
            </div>
        </div>


        <div class="row mb-3">
            <label for="Number" class="col-md-4 col-lg-3 col-form-label">Number</label>
            <div class="col-md-8 col-lg-9">

                <input name="number" type="text" class="form-control" id="number" placeholder="<?php echo $role = $checkdata['number']; ?>" required>
                <input name="role" type="hidden" class="form-control" id="role" value="<?php echo $role = $checkdata['role']; ?>">
            </div>
        </div>




        <div class="row mb-3">
            <label for="password" class="col-md-4 col-lg-3 col-form-label">password</label>
            <div class="col-md-8 col-lg-9">

                <input name="password" type="text" class="form-control" id="password" placeholder="<?php echo $role = $checkdata['password']; ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="confirmpassword" class="col-md-4 col-lg-3 col-form-label">Confirm-Password</label>
            <div class="col-md-8 col-lg-9">

                <input name="cpsw" type="password" class="form-control" id="c-password" placeholder="Re-Enter your password" required>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" name="update" class="btn btn-primary">Update Changes</button>
        </div>
    </form><!-- End Profile Edit Form -->



</body>

</html>