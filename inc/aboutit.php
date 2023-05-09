<?php 
        session_start();
        include "./connect.php";
        
        $location = $_POST['location'];
        $bio = $_POST['bio'];
        $submit = $_POST['submit'];


        if(isset($_POST['submit'])){
            $end = "INSERT INTO `products` (location, bio) VALUES ('$location', '$bio')";
            $result = $connect->query($end);
            $connect->close();
            
          header("Location: ../index.php");
        } else {
            $_SESSION['error'] = "Something went wrong";
            header("Location: ../about.php");
        }

    
        
    ?>