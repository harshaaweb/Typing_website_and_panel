<?php
include('./dbconfig.php');
session_start();
if (isset($_SESSION['newEmail'])) {
    // echo "Welcome " . $_SESSION['email'];
    $plan = "15";
    $sql = "SELECT * FROM `users` WHERE `email` = '$_SESSION[newEmail]'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['subscription'];
    // echo    "(" . $name . ")";

    // code to check subscription is on or off from database
    $get_subsbriptioin = "SELECT * FROM `susbcribe_plan_access`";
    $fetched_data = mysqli_query($conn, $get_subsbriptioin);
    $fetched_value = mysqli_fetch_assoc($fetched_data);
    $subscription_status = $fetched_value['subscription'];
    echo $subscription_status;
    if ($subscription_status == "on") {
        if ($row['subscription'] == $plan) {
            echo "Subscribed";
        } else {
            header("Location:./pleaseSubscribe_Page.php");
            // echo "Not Subscribed";
        }
    }
} else {
    header("location:./login.php");
}


$select = "SELECT * from newpassages ORDER BY id DESC LIMIT 1";
$query = mysqli_query($conn, $select);
$data = mysqli_fetch_assoc($query);

?>

<html lang="en">

<head>
    <title>Simple Speed Typer</title>
    <link rel="stylesheet" href="./assets/css/maintest.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <style>
        .Mid_Container {
            padding: 5px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }

        .Inside_Mid_cont {
            display: flex;
            align-items: center;
        }

        /* media query */
        @media(max-width:700px) {
            .Mid_Container {
                flex-direction: column;
            }

            .Inside_Mid_cont {
                margin: 10px;
            }

        }
    </style>
</head>

<body>

    <?php

    // code to check subscription is on or not from database
    // $getinfo = "SELECT * FROM `susbcribe_plan_access` WHERE id = 1";
    // $result = mysqli_query($conn, $getinfo);
    // $getSubscriptionValue = mysqli_fetch_assoc($result);
    // $subcriptionValue = $getSubscriptionValue['subscription'];
    // echo "<script> alert('$subcriptionValue') </script>";

    // if ($row['subscription'] == $plan) {
    // 
    ?>
    <div class="container">
        <div class="maindiiv">
            <div class="heading">
                <div class="leftd"><span class="spantext"> Topic -</span> <?php echo $data['name']; ?></div>
                <div class="leftd"><span class="spancol"><?php echo $data['time']; ?> </span> mins</div>
                <div class="leftd"><span class="spantext"> Date -</span> <?php echo   date("Y-m-d") ?> </div>

                <div class="rightd"><a href="./index.php" class="linkcol">
                        <i class="fa-solid fa-house"></i></a></div>
            </div>
            <div class="header">
                <div class="wpm">
                    <div class="header_text">WPM</div>
                    <div class="curr_wpm">100</div>
                </div>
                <div class="cpm">
                    <div class="header_text">CPM</div>
                    <div class="curr_cpm">100</div>
                </div>
                <div class="errors">
                    <div class="header_text">Errors</div>
                    <div class="curr_errors">0</div>
                </div>
                <div class="timer">
                    <div class="header_text">Time</div>
                    <div class="curr_time"><?php echo $data['time'] * 60; ?></div>
                </div>
                <div class="accuracy">
                    <div class="header_text">% Accuracy</div>
                    <div class="curr_accuracy">100</div>
                </div>
            </div>

            <div class="Mid_Container">
                <div class="Inside_Mid_cont">
                    <div class="" style="font-size: 19px;">Total character with space : </div>
                    <div class="" id="total_char_with_space" style="font-size: 19px; color:black; font-weight: 800;"></div>
                </div>
                <div class="Inside_Mid_cont">
                    <div class="" style="font-size: 19px;">Total character without space : </div>
                    <div id="total_char_without_space" style="font-size: 19px; color:black; font-weight: 800;"></div>
                </div>

            </div>
            <!-- <div class="quote" style="text-align: justify;">Click on the area below to start the test.</div> -->
            <div class="quote" id="passage" style="text-align: justify;"><?php echo $data['passage'] ?>.</div>
            <textarea class="input_area" placeholder="start typing here..." oninput="processCurrentText()" onfocus="startGame()"></textarea>
        </div>

        <button class="restart_btn" onclick="resetValues()">Restart</button>
    </div>
    <form method="POST" action="./maintest.php" name="f1">
        <input type="hidden" name="wpm" id="wpm">
        <input type="hidden" name="cpm" id="cpm">
        <input type="hidden" name="error" id="error">
        <input type="hidden" name="accuracy" id="accuracy">
        <input type="hidden" name="passagetime" value="<?php echo $data['time']; ?>">
        <input type="hidden" name="passageName" id="passageName" value="<?php echo $data['name']; ?>">
        <!-- <input type="hidden" name="date" id="date"> -->
        <button type="submit" name="submit" id="submit" style="margin-bottom:10px; background:#efa423; border:none; padding:10px;  font-size:20px;">Save
            Details</button>

    </form>
    <script src="./assets/js/maintest.js"></script>
    <?php
    // } else {
    //     include('./pleaseSubscribe_Page.php');
    // }
    ?>




    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/SearchButton.js"></script>
</body>

</html>
<?php
include('./dbconfig.php');


if (isset($_POST['submit'])) {
    $wpm = $_POST['wpm'];
    $cpm = $_POST['cpm'];
    $accuracy = $_POST['accuracy'];
    $passagetime = $_POST['passagetime'];
    $error = $_POST['error'];
    $user = $_SESSION['newEmail'];
    $passageName = $_POST['passageName'];

    // echo $wpm;

    $insert = "INSERT INTO `maintestrecord`(`wpm`, `cpm`, `accuracy`, `passagetime`, `error`, `user`, `passageName`) VALUES ('$wpm','$cpm','$accuracy','$passagetime','$error','$user','$passageName')";
    // echo $insert;
    $res = mysqli_query($conn, $insert);
    if ($res) {
        echo "done";
    } else {
        echo "not done";
    }
}
?>
<!-- <html lang="en">

<head>
    <title>Simple Speed Typer</title>
    <link rel="stylesheet" href="./assets/css/lengthypara.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>

<body>

    <div class="container">
        <div class="maindiiv">
            <div class="heading">
                <div class="leftd"><span class="spancol"> <?php echo $data['time']; ?></span> Minute Typing Test Time
                </div>
                <div class="leftd" style="display: flex;">Title: <div class="titlee" id="titlee">
                        &nbsp; <?php echo $data['title']; ?></div>
                </div>

                <div class="rightd"><a href="./index.php" class="linkcol">
                        <i class="fa-solid fa-house"></i></a></div>
            </div>
            <div class="header">
                <div class="wpm">
                    <div class="header_text">WPM</div>
                    <div class="curr_wpm">100</div>
                </div>
                <div class="cpm">
                    <div class="header_text">CPM</div>
                    <div class="curr_cpm">100</div>
                </div>
                <div class="errors">
                    <div class="header_text">Errors</div>
                    <div class="curr_errors">0</div>
                </div>
                <div class="timer">
                    <div class="header_text">Time</div>
                    <div class="curr_time">00s</div>
                </div>
                <div class="accuracy">
                    <div class="header_text">% Accuracy</div>
                    <div class="curr_accuracy">100</div>
                </div>
            </div>

            <div class="quote" style="text-align: justify;">Click on the area below to start the test.  </div>  
            <div class="quote"  id="quote" style="text-align: justify; display:none;"> Click on the area below to start the test.<?php echo $data['passage']; ?></div>
            <textarea class="input_area" placeholder="start typing here..." onclick="processCurrentText()"
                onfocus="startGame()"></textarea>
        </div>
        <form method="POST" action="mainTest.php" name="f1">
            <input type="hidden" name="title" id="title">
            <input type="hidden" name="WPM" id="WPM">
            <input type="hidden" name="CPM" id="CPM">
            <input type="hidden" name="Error" id="Error">
            <input type="hidden" name="Accuracy" id="Accuracy">
            <input type="hidden" name="Time" id="Time">
            <button type="submit" name="submit" id="submit"
                style="margin-bottom:10px; background:#efa423; border:none; padding:10px;  font-size:20px;">Save
                Details</button>
        </form>

        <button class=" restart_btn" onclick="resetValues()">Restart</button>
    </div>
    <script src="./assets/js/maintest.js"></script>
</body>

</html> -->