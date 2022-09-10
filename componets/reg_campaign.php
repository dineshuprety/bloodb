<?php
if (isset($_GET['add'])) {
    $email_data = $_SESSION['email'];
    $query = "SELECT * FROM blood_donor WHERE EMAIL = '$email_data'";
    $result = mysqli_query($con, $query) or die(mysql_error());
    $rows = $result->fetch_row();
    // echo "<pre>";
    // echo print_r($rows);
    // die();
    $name        = $rows[1];
    $father_name =  $rows[2];
    $gender      = $rows[3];
    $dob         =  $rows[4];
    $blood       =  $rows[5];
    $body_weight =  $rows[6];
    $email       =  $rows[7];
    $country     =  $rows[13];
    $province    =  $rows[12];
    $district    =  $rows[11];
    $area        =  $rows[10];
    $addrress    =  $rows[9];
    $contact_1   =  $rows[14];
    $contact_2   = $rows[15];
    $last_b_donet =  $rows[17];
    $new_donor   =  $rows[16];
    $target_file = $rows[18];

    $earlier = new DateTime($last_b_donet);
    $later = new DateTime('today');
    $numberOfDaysSinceLastDonate = $later->diff($earlier)->format("%a");

    $query1 = "SELECT * FROM blood_campaign WHERE EMAIL = '$email'";
    $result1 = mysqli_query($con, $query1) or die(mysql_error());
    $rows1 = mysqli_num_rows($result1);
    if ($rows1 == 1) {
        echo "<div class='alert alert-danger'> You have already registered.</div>";
    } else if ($numberOfDaysSinceLastDonate <= 56) {
        echo "<div class='alert alert-danger'> You cannot donate blood since it hasn't been 56 days since you last donated.</div>";
    } else {
        $sql = "INSERT INTO blood_campaign (NAME, FATHER_NAME, GENDER, DOB, BLOOD, BODY_WEIGHT, EMAIL,ADDRESS, AREA, DISTRICT, PROVINCE, COUNTRY, CONTACT_1, CONTACT_2, NEW_DONOR, LAST_D_DATE, DONOR_PIC)
        VALUES ('{$name}','{$father_name}','{$gender}','{$dob}','{$blood}','{$body_weight}','{$email}','{$addrress}','{$area}','{$district}','{$province}','{$country}','{$contact_1}','{$contact_2}','{$new_donor}','{$last_b_donet}','{$target_file}')";

        if ($con->query($sql) === TRUE) {
            echo "<div class='alert alert-success text-center'>Blood Campaign Register successfully.</div>";
        }
    }
}
