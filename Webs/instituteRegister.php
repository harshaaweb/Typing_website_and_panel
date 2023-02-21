<?php
include('./dbconfig.php');

//   institute register code into institute database
if (isset($_POST['signup'])) {
    $instituteName = $_POST['instituteName'];
    $instituteReferenceID = strtoupper(bin2hex(random_bytes(5)));
    $instituteEmail = $_POST['instituteEmail'];
    $instituteAddress = $_POST['instituteAddress'];
    $institutePhoneNumber = $_POST['institutePhoneNumber'];
    $ownerPhoneNumber = $_POST['ownerPhoneNumber'];
    $instituteLicenseNo = $_POST['instituteLicenseNo'];
    $instituteCeo = $_POST['instituteCeo'];
    $password = $_POST['password'];
    $cpsw = $_POST['cpsw'];
    if ($password == $cpsw) {
        $insert = "INSERT INTO `institute`(`instituteName`, `instituteReferenceID`, `instituteEmail`, `instituteAddress`, `institutePhoneNumber`, `ownerPhoneNumber`, `instituteLicenseNo`, `instituteCeo`, `password`) VALUES ('$instituteName','$instituteReferenceID','$instituteEmail','$instituteAddress','$institutePhoneNumber','$ownerPhoneNumber','$instituteLicenseNo','$instituteCeo','$password')";
        // echo $insert;
        $check = mysqli_query($conn, $insert);
        if ($check) {
            // code to alert user that data is inserted
            echo "<script>alert('Institute Registered Successfully')</script>";
            // code to redirect user to login page
            header("location:./Institute_Login.php");
        } else {
            echo "<div class='psw'>not inserted</div>";
        }


        // header("location:./login.php");
    } else {
        echo "<script>alert('password not matched')</script>";
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="./assets/css/LoginTwo.css">


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">

                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5">
                        <div class="login-wrap p-4 p-md-5">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-user-o"></span>
                            </div>
                            <h3 class="text-center mb-4">Register Institute Here </h3>
                            <form class="login-form" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-left" placeholder="Institute name" name="instituteName" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-left" placeholder="Institute email" name="instituteEmail" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-left" placeholder="Institute address" name="instituteAddress" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-left" placeholder="Institute Phone Number" name="institutePhoneNumber" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-left" placeholder="Owner Phone Number" name="ownerPhoneNumber" required />
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control rounded-left" placeholder="Institute License number" name="instituteLicenseNo" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-left" placeholder="Institute CEO" name="instituteCeo" required />
                                </div>
                                <div class=" form-group d-flex">
                                    <input type="password" class="form-control rounded-left" name="password" placeholder="password" required />
                                </div>
                                <div class=" form-group d-flex">
                                    <input type="password" name="cpsw" class="form-control rounded-left" placeholder="Confirm-Password" required />
                                </div>
                                <!-- <div class=" form-group d-flex">
                                    <input type="file" name="image" class="form-control rounded-left" value="image" required>
                                </div> -->

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary rounded submit p-3 px-5" name="signup">
                                        Sign-up
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

</body>

</html>