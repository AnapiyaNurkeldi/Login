<?php 
    session_start();
    include "./connect.php";
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    if ($password == $password_confirm) {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$password')";
        $result = $connect->query($sql);
        $connect->close();
        header("Location: ../about.php");
    } else {
        $_SESSION['error'] = "Passwords do not match";
        header("Location: ../register.php");
    }
?>