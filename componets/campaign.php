<?php
if (isset($_POST['submit'])) {
    $titlename        = $_POST['titlename'];
    $provincename     = $_POST['provincename'];
    $districtname     = $_POST['districtname'];
    $datename         = $_POST['datename'];
    $contactname      = $_POST['contactname'];

    if (empty($titlename) || empty($provincename) || empty($districtname) || empty($datename) || empty($contactname)) {
        echo "<div class='alert alert-danger text-center'>Field can't be empty!</div>";
    } else {
        $sql = "INSERT INTO campaign (campaign_name, province_name, district_name, date, contact)
            VALUES ('{$titlename}','{$provincename}','{$districtname}','{$datename}','{$contactname}')";

        if ($con->query($sql) === TRUE) {
            echo "<div class='alert alert-success text-center'>Campaign created successfully.</div>";
        }
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM campaign where id = $id";
    if ($con->query($sql)) {
        echo "<div class='alert alert-success text-center'>Campaign deleted successfully.</div>";
    }
    
}
