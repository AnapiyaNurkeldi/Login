<?php 
    session_start();
    include "./connect.php";
    $location = $_POST['location'];
    $bio = $_POST['bio'];
    $submit = $_POST['update_profile'];

    if(isset($_POST['update_profile'])){
        $end = "UPDATE `products` SET `location`='$location',`bio`='$bio'";
        $result = $connect->query($end);    
        $connect->close();
        header("Location: ../profile.php");
    } else {
        $_SESSION['error'] = "Something went wrong";
        header("Location: ../profile.php");
    }
?>