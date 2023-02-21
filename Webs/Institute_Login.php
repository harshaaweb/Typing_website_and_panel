<?php
include('./dbconfig.php');


//checking login -----------------------
session_start();
if (isset($_POST['login'])) {
    $institute_email = $_POST['instituteEmail'];
    $institute_password = $_POST['password'];

    $select = "SELECT * FROM institute WHERE instituteEmail='$institute_email' && password='$institute_password'";
    $query = mysqli_query($conn, $select);
    $data = mysqli_fetch_assoc($query);
    if (isset($data)) {
        $_SESSION['instituteEmail'] = $data['instituteEmail'];
        header("location:./Institute_Profile.php"); 
        // echo '<script>alert("Login Successfull")</script>';
    } else {
        echo '<script>alert("Wrong Data")</script>';
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
    <link rel="stylesheet" href="./assets/css/LoginTwo.css">


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
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
                        <h3 class="text-center mb-4">Institute Login Here</h3>
                        <form class="login-form" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="email" name="instituteEmail" required />
                            </div>
                            <div class=" form-group d-flex">
                                <input type="text" class="form-control rounded-left" name="password" placeholder="password" required />
                            </div>
                            <div class="form-group d-md-flex">
                                <!-- <div class="w-80">
                                     <label class="checkbox-wrap checkbox-primary">Remember Me
                                         <input type="checkbox" checked />
                                         <span class="checkmark"></span>
                                     </label>
                                 </div> -->
                                <!-- <div class="w-50 text-md-right">
                                     <a href="#">Forgot number</a>
                                 </div> -->
                            </div>
                            <!-- <div class="form-group d-md-flex">
                                 </hr>
                                 <div class="w-100" style="text-align: center;">
                                     <label class="checkbox-wrap checkbox-primary"><a href="./singup.php">  Create
                                             Account
                                         </a>
                                     </label>
                                 </div>


                             </div> -->
                            <!-- <div class="form-group d-md-flex">
                                 </hr>
                                 <div class="w-100" style="text-align: center;">
                                     <label class="checkbox-wrap checkbox-primary">  OR
                                          
                                     </label>
                                 </div>


                             </div>
                             <div class="w-100" style="text-align: center;">
                                 <label class="checkbox-wrap checkbox-primary"><a href="./instituteRegister.php">Register your Institute
                                     </a>
                                 </label>
                             </div> -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary rounded submit p-3 px-5" name="login">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>