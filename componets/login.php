<?php
session_start();
if (isset($_POST['submit'])) {
    $user_email    = $_POST['email'];
    $user_password = $_POST['password'];
    if (empty($user_email) || empty($user_password)) {
        echo '<div class="alert alert-danger"> Field cant be empty </div>';
    } else {
        $email = stripslashes($user_email);
        //escapes special characters in a string
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($user_password);
        $password = mysqli_real_escape_string($con, $password);
        //Checking is user existing in the database or not
        $query    = "SELECT * FROM `blood_donor` WHERE EMAIL='$email'
        and PASSWORD='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            // Redirect user to index.php
            header("Location: user.php");
        } else {
            echo "<div class='alert alert-danger'> Wrong Credintials</div>";
        }
        
        
    }
}
?>