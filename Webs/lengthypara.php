<?php
include('./dbconfig.php');

session_start();
if (isset($_SESSION['newEmail'])) {
    // echo "Welcome " . $_SESSION['email'];
    $intermediate_plan = "10";
    $plus_plan = "15";
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
        if ($row['subscription'] == $intermediate_plan || $row['subscription'] == $plus_plan) {
            echo "Subscribed";
        } else {
            header("Location:./pleaseSubscribe_Page.php");
            // echo "Not Subscribed";
        }
    }
} else {
    header("location:./login.php");
}
?>
<html lang="en">

<head>
    <title>Simple Speed Typer</title>
    <link rel="stylesheet" href="./assets/css/lengthypara.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>

<body>
    <?php
    // if ($row['subscription'] == $intermediate_plan || $row['subscription'] == $plus_plan) {
    ?>
    <div class="container">
        <div class="maindiiv">
            <div class="heading">
                <div class="leftd"><span class="spancol"> Paragraph</span> Typing Test</div>
                <div class="droppddownn">
                    <button class="dropbtn">Timer</button>
                    <div class="droppddownn-content">
                        <p class="timer_id">5 Min </p>
                        <p class="timer_id">10 Min </p>
                        <p class="timer_id">15 Min </p>
                        <p class="timer_id">20 Min </p>
                    </div>
                </div>
                <div class="rightd"><a href="./index.php" class="linkcol">
                        <i class="fa-solid fa-house"></i></a></div>
            </div>
            <div class="header">
                <div class="wpm">
                    <div class="header_text">wpm</div>
                    <div class="curr_wpm">100</div>
                </div>
                <div class="cpm">
                    <div class="header_text">cpm</div>
                    <div class="curr_cpm">100</div>
                </div>
                <div class="errors">
                    <div class="header_text">Errors</div>
                    <div class="curr_errors">0</div>
                </div>
                <div class="timer">
                    <div class="header_text">Time</div>
                    <div class="curr_time">10s</div>
                </div>
                <div class="accuracy">
                    <div class="header_text">% Accuracy</div>
                    <div class="curr_accuracy">100</div>
                </div>
            </div>

            <div class="quote" style="text-align: justify;">Click on the area below to start the test.</div>
            <textarea class="input_area" placeholder="start typing here..." oninput="processCurrentText()" onfocus="startGame()"></textarea>
        </div>

        <button class="restart_btn" onclick="resetValues()">Restart</button>
    </div>


    <form method="POST" action="lengthypara.php" name="f1">
        <input type="hidden" name="wpm" id="wpm">
        <input type="hidden" name="cpm" id="cpm">
        <input type="hidden" name="error" id="error">
        <input type="hidden" name="accuracy" id="accuracy">
        <input type="hidden" name="time" id="time">
        <button type="submit" name="submit" id="submit" style="margin-bottom:10px; background:#efa423; border:none; padding:10px;  font-size:20px;">Save
            Details</button>

    </form>
    <script src="./assets/js/lengthypara.js"></script>
    <?php
    // } else {
    //     include('./pleaseSubscribe_Page.php');
    // }
    ?>
</body>

</html>
<?php
include('./dbconfig.php');


if (isset($_POST['submit'])) {
    $wpm = $_POST['wpm'];
    $cpm = $_POST['cpm'];
    $accuracy = $_POST['accuracy'];
    $error = $_POST['error'];
    $time = $_POST['time'];
    $user = $_SESSION['newEmail'];

    // echo $wpm;

    $insert = "INSERT INTO `paragraph_record`(`wpm`, `cpm`, `accuracy`, `error`, `time`,`user`) VALUES ('$wpm','$cpm','$accuracy','$error','$time','$user')";
        // echo $insert;
    $res = mysqli_query($conn, $insert);
    if ($res) {
        echo "done";
    } else {
        echo "not done";
    }
}
?>