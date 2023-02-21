<?php
include("./dbconfig.php");

// post data to database
$sessionEmail = $_SESSION['newEmail'];
// get data of user from session

$getuser = "SELECT * FROM `users` WHERE `email`='$sessionEmail'";
// echo $getuser;
$result = mysqli_query($conn, $getuser);
$row = mysqli_fetch_assoc($result);
$std_ref_id = $row['referenceID'];
$email = $row['email'];
// echo $std_ref_id;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $std_ref_id = $_POST['std_ref_id'];
    $ref_inst_name = $_POST['ref_inst_name'];
    $ref_inst_id = $_POST['ref_inst_id'];
    $feedback_msg = $_POST['feedback_msg'];

    $insert = "INSERT INTO `feedback`(`name`, `email`, `std_ref_id`, `ref_inst_name`, `ref_inst_id`, `feedback_msg`) VALUES ('$name','$email','$std_ref_id','$ref_inst_name','$ref_inst_id','$feedback_msg')";
    $result = mysqli_query($conn, $insert);

    if ($result) {
        echo "<script>alert('Feedback Submitted Successfully')</script>";
    } else {
        echo "<script>alert('Feedback Not Submitted')</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Typing School</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>
    <section class="section coming-soon" data-section="section3">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-xs-12">
                    <div class="continer centerIt">
                        <div>

                            <h4>Hey! <em><?php echo $_SESSION["newEmail"]; ?></em>, <br /> Thankyou for joining. If you have any suggestion regarding course and website then please give us your valueable <em>Feedback </em> 👍</h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="right-content">
                        <div class="top-content">
                            <h6>Register your free account and <em>get immediate</em> access to online courses</h6>
                        </div>
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset>
                                        <div style="text-align: left; color:white;">Name</div>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="" value="<?php echo $row['name']; ?>" readonly style="background:#242F41">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <div style="text-align: left; color:white;">Email</div>
                                        <input name="email" type="text" class="form-control" id="name" placeholder="Your Name" required="" value="<?php echo $row['email']; ?>" readonly style="background:#242F41">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <div style="text-align: left; color:white;">Std_Ref_Id</div>
                                        <input name="std_ref_id" type="text" class="form-control" id="name" placeholder="Your Name" required="" value="<?php echo $row['referenceID']; ?>" readonly style="background:#242F41">
                                    </fieldset>
                                </div>
                                <div class=" col-md-12">
                                    <fieldset>
                                        <div style="text-align: left; color:white;">Ref_inst_name</div>
                                        <input name="ref_inst_name" type="text" class="form-control" id="name" placeholder="Your Name" required="" value="<?php echo $row['referBY_inst']; ?>" readonly style="background:#242F41">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <div style="text-align: left; color:white;">Ref_inst_id</div>
                                        <input name="ref_inst_id" type="text" class="form-control" id="name" placeholder="Your Name" required="" value="<?php echo $row['referBY']; ?>" readonly style="background:#242F41">
                                    </fieldset>
                                </div>

                                <div class=" col-md-12">
                                    <fieldset>
                                        <div style="text-align: left; color:white;">Feedback</div>
                                        <input name="feedback_msg" type="text" class="form-control" id="name" placeholder="Enter your feedback" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>

                                        <button type="submit" id="form-submit" name="submit" class="button">Submit</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>