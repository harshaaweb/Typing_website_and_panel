 <?php
    //  code to unset cookies and logout

    session_start();
    session_unset();
    session_destroy();
    header("location:./login.php");

    ?>
  