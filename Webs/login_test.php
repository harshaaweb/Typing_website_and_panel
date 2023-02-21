<?php
include('./dbconfig.php');

// code to store session and cookies in php while login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        // echo "logged in" . $email;
        // header("location: ./index.php");
        $S_Email = $_SESSION['email'];
        // alert S_Email
        echo "<script>alert('$S_Email');</script>";
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
</head>

<body>
    <form action="" method="post">
        <label for="">Email</label>
        <input type="text" name="email" id="">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" id="">
        <br>
        <button type="submit" name="login">Login</button>

    </form>

</body>

</html>