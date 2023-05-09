<?php 
    session_start();
    include "./connect.php";

    $email = $_POST['email'];
    $password = $_POST['password'];
    $submit = $_POST['submit'];

    $check_user = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");

    if (mysqli_num_rows($check_user)>0) {
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] =[
            'id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'password' => $user['password']
        ];
        header("Location: ../profile.php");
    } else {
        $_SESSION['error'] = "Invalid email or password";
        header("Location: ../index.php");
    }
    
?>