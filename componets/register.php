<?php
if (isset($_POST['submit'])) {
    $name        = $_POST['NAME'];
    $father_name = $_POST['FATHER_NAME'];
    $gender      = $_POST['GENDER'];
    $dob         = $_POST['DOB'];
    $blood       = $_POST['BLOOD'];
    $body_weight = $_POST['BODY_WEIGHT'];
    $email       = $_POST['EMAIL'];
    $country     = $_POST['COUNTRY'];
    $province    = $_POST['PROVINCE'];
    $district    = $_POST['DISTRICT'];
    $area        = $_POST['AREA'];
    $addrress    = $_POST['ADDRESS'];
    $contact_1   = $_POST['CONTACT_1'];
    $contact_2   = $_POST['CONTACT_2'];
    $last_b_donet = $_POST['LAST_D_DATE'];
    $new_donor   = $_POST['NEW_DONOR'];
    $password = md5($_POST['PASSWORD']);

    // insert image
    $target_dir = "donor_image/";
    $post_image = $_FILES['fileToUpload']['name'];
    $target_file = $target_dir . rand(100, 999) . basename($post_image);
    $post_temp_image = $_FILES['fileToUpload']['tmp_name'];
    move_uploaded_file("{$post_temp_image}", $target_file);

    if (empty($name) || empty($father_name) || empty($gender) || empty($dob) || empty($blood) || empty($body_weight) || empty($email) || empty($country) || empty($province) || empty($district) || empty($area) || empty($addrress) || empty($contact_1) || empty($contact_2) || empty($last_b_donet) || empty($new_donor) || empty($password)) {
        echo "<div class='alert alert-danger text-center'>Field can't be empty!</div>";
    } elseif (date_diff(date_create($dob), date_create('today'))->y <= 17) {
        echo "<div class='alert alert-danger text-center'>You must be at least 17 years old.</div>";
    } else {
        $sql = "INSERT INTO blood_donor (NAME, FATHER_NAME, GENDER, DOB, BLOOD, BODY_WEIGHT, EMAIL, PASSWORD ,ADDRESS, AREA, DISTRICT, PROVINCE, COUNTRY, CONTACT_1, CONTACT_2, NEW_DONOR, LAST_D_DATE, DONOR_PIC, STATUS)
            VALUES ('{$name}','{$father_name}','{$gender}','{$dob}','{$blood}','{$body_weight}','{$email}','{$password}','{$addrress}','{$area}','{$district}','{$province}','{$country}','{$contact_1}','{$contact_2}','{$new_donor}','{$last_b_donet}','{$target_file}',0)";

        if ($con->query($sql) === TRUE) {
            $_SESSION['email'] = $email;
            // Redirect user to index.php
            header("Location: user.php");
            // echo "<div class='alert alert-success text-center'>Register created successfully. <a href='/'>Login</a></div>";
        }
    }
}
