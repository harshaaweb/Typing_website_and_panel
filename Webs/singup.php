 <?php
    include('./dbconfig.php');

    //login
    // session_start();
    //signup//
    if (isset($_POST['signup'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpsw = $_POST['cpsw'];

        $image = $_FILES['image']['name'];
        $tpm_name = $_FILES['image']['tmp_name'];
        $path = "./image/" . $image;
        move_uploaded_file($tpm_name, $path);
        $referenceID = strtoupper(bin2hex(random_bytes(5)));
        $referBY = $_POST['referBY'];
        $referBY_inst= $_POST['referBY_inst'];
        if ($password == $cpsw) {
            $insert = "INSERT INTO users(name,address,email,password,image,referenceID,referBY,referBY_inst) VALUES('$name','$address','$email','$password','$image','$referenceID','$referBY','$referBY_inst')";

            $check = mysqli_query($conn, $insert);
            header("location:./login.php");
        } else {
            echo "<div class='psw'>password does't match </div>";
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
                             <h3 class="text-center mb-4">Register Here</h3>
                             <form class="login-form" method="POST" >
                                 <div class="form-group">
                                     <input type="text" class="form-control rounded-left" placeholder="name" name="name" required />
                                 </div>
                                 <div class="form-group">
                                     <input type="text" class="form-control rounded-left" placeholder="email" name="email" required />
                                 </div>
                                 <div class="form-group">
                                     <input type="text" class="form-control rounded-left" placeholder="address" name="address" required />
                                 </div>
                                 <div class=" form-group d-flex">
                                     <input type="password" class="form-control rounded-left" name="password" placeholder="password" required />
                                 </div>
                                 <div class=" form-group d-flex">
                                     <input type="password" name="cpsw" class="form-control rounded-left" placeholder="Confirm-Password" required />
                                 </div>
                                 <div class=" form-group d-flex">
                                     <input type="text" name="referBY" class="form-control rounded-left" placeholder="Refered BY " required />
                                 </div>
                                 <div class=" form-group d-flex">
                                     <input type="text" name="referBY_inst" class="form-control rounded-left" placeholder="Reference Institute Name " required />   
                                 </div>
                                 <div class=" form-group d-flex">
                                     <input type="file" name="image" class="form-control rounded-left" value="image" required>
                                 </div>

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