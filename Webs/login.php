 <?php
    include('./dbconfig.php');
    session_start();
// how to store PHPSSID in session
 

    //  code to store session data while login 
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if ($num == 1) {
            $row = mysqli_fetch_assoc($result);
            setcookie('password', $password, time() + 60 * 60 * 7);
            // code to store session_id in cookie
            setcookie('PHPSESSID', session_id(), time() + 60 * 60 * 7);
            // code to store session data in cookie
            setcookie('newEmail', $email, time() + 60 * 60 * 7);
            $_SESSION['loggedin'] = true;
            $_SESSION['newEmail'] = $email;
            header("location: ./index.php");
            echo "<script>alert($_SESSION[newEmail]);</script>";
        } else {
            echo "Invalid Credentials";
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
                         <a href="./index.php">

                             <div class="icon d-flex align-items-center justify-content-center">
                                 <span class="fa fa-user-o"></span>
                             </div>
                         </a>
                         <h3 class="text-center mb-4">Login Here</h3>
                         <form class="login-form" method="POST">
                             <div class="form-group">
                                 <input type="text" class="form-control rounded-left" placeholder="email" name="email" required />
                             </div>
                             <div class=" form-group d-flex">
                                 <input type="text" class="form-control rounded-left" name="password" placeholder="password" required />
                             </div>
                             <div class="form-group d-md-flex">
                                 <div class="w-80">
                                     <label class="checkbox-wrap checkbox-primary">Remember Me
                                         <input type="checkbox" name="remember" checked />
                                         <span class="checkmark"></span>
                                     </label>
                                 </div>
                                 <!-- <div class="w-50 text-md-right">
                                     <a href="#">Forgot number</a>
                                 </div> -->
                             </div>
                             <div class="form-group d-md-flex">
                                 </hr>
                                 <div class="w-100" style="text-align: center;">
                                     <label class="checkbox-wrap checkbox-primary"><a href="./singup.php"> Create
                                             Account
                                         </a>
                                     </label>
                                 </div>


                             </div>
                             <div class="form-group d-md-flex">
                                 </hr>
                                 <div class="w-100" style="text-align: center;">
                                     <label class="checkbox-wrap checkbox-primary"> OR

                                     </label>
                                 </div>


                             </div>
                             <div class="w-100" style="text-align: center;">
                                 <label class="checkbox-wrap checkbox-primary"><a href="./Institute_Login.php">Login your Institute
                                     </a>
                                 </label>
                             </div>
                             <div class="w-100" style="text-align: center;">
                                 <label class="checkbox-wrap checkbox-primary"><a href="./instituteRegister.php">Register your Institute
                                     </a>
                                 </label>
                             </div>
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